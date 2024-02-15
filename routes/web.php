<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\students_controll;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [students_controll::class,'index'])->name('student-view');
Route::delete('/delete/{id}', [students_controll::class, 'student_delete'])->name('delete-student');
Route::get('/create', [students_controll::class, 'student_create'])->name('create-student');
Route::post('/create', [students_controll::class, 'student_post'])->name('post-student');
Route::get('/edit/{id}', [students_controll::class, 'student_edit'])->name('edit-student');
Route::put('/edit/{id}', [students_controll::class, 'student_update'])->name('update-student');