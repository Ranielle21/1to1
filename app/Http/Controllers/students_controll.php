<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\students;

class students_controll extends Controller
{
    function index(){
        $students_table = DB::table('students')
        ->join('_academic', 'students.id', '=', '_academic.students_id')
        ->join('_country', 'students.id', '=', '_country.students_id')
        ->select(
            'students.*',
            '_Academic.Course', 
            '_Academic.Year', 
            '_Country.Continent', 
            '_Country.Country_name', 
            '_Country.Capital'
            )
            ->get();
     return view('index', ['students_table' => $students_table]);
    }
 function student_delete($id){
        $item = students::find($id);
        $item->academic()->delete();
        $item->country()->delete();
        $item->delete();
        return redirect()->route('student-view')->with(['success','Delete successful']);
    }

function student_create(){
        return view('create');
    }

function student_post(Request $request){
        $request -> validate([
            'Name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'course' => 'required',
            'year' => 'required',
            'continent' => 'required',
            'Country_name' => 'required',
            'capital' => 'required'
        ]);

        $student = students::create([
            'Name' => $request->Name,
            'Age' => $request->age,
            'Address' => $request->address
        ]);

        $student->academic()->create([
            'Course' => $request->course,
            'Year' => $request->year
        ]);

        $student->country()->create([
            'Continent' => $request->continent,
            'Country_name' => $request->Country_name,
            'Capital' => $request->capital
        ]);


        return redirect()->route('student-view')->with(['success','Create successful']);
    }

function student_edit($id){
        $student = students::find($id);
        $academic = $student->academic;
        $country = $student->country;
        return view('edit', compact('student', 'academic', 'country'));
    }

function student_update(Request $request, $id){
        $updated_data = students::find($id);
        $updated_data -> update([
            'Name' => $request->Name,
            'Age' => $request->age,
            'Address' => $request->address
        ]);

        $updated_data->academic()->update([
            'Course' => $request->course,
            'Year' => $request->year
        ]);

        $updated_data->country()->update([
            'Continent' => $request->continent,
            'Country_name' => $request->Country_name,
            'Capital' => $request->capital
        ]);

        return redirect()->route('student-view')->with(['success','Update successful']);
    }
}
