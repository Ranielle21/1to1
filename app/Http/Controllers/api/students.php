<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\students as ModelStudents;
use Illuminate\Http\Request;

class students extends Controller
{
    public function index(){
        $students=ModelStudents::with('Academic', 'Country')->get();
        return response()->json(['students' => $students]);
    }
    
    public function store(Request $request)
{
    $students = ModelStudents::create($request->all());

    $academicData = $request->input('Academic');
    $students->Academic()->create($academicData);

    $countryData = $request->input('Country');
    $students->Country()->create($countryData);
    
    return response()->json(["message" => "successfully created"]

    );
}

    public function update(Request $request, $id)
    {
        $students = ModelStudents::find($id);
        $students -> update($request->all());
        $students -> Academic()->update($request->input('Academic'));
        $students -> Country()->update($request->input('Country'));
        return response()->json(['student' => $students]);
    }

    public function destroy($id)
    {
        $students = ModelStudents::find($id);
        $students -> Academic()->delete();
        $students -> Country()->delete();
        $students -> delete();
        return response()-> json(["message" => $students]);
    }
    
}
