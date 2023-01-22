<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VinculeController;

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

Route::get('/',[LoginController::class,'index']);
Route::post('authenticate',[LoginController::class,'authenticate'])->name('login');
Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::get('asingar',[VinculeController::class,'index'])->name('vicule.index');
Route::post('asignar/guardar',[VinculeController::class,'store'])->name('vicule.store');
Route::get('asignaturas/export',[VinculeController::class,'export'])->name('subject.export');

Route::get('estudiantes',[StudentController::class,'index'])->name('student.index');
Route::post('estudiantes/guardar',[StudentController::class,'store'])->name('student.store');
Route::get('estudiantes/editar/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('estudiantes/actualizar/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('estudiantes/eliminar/{id}',[StudentController::class,'destroy'])->name('student.delete');

Route::get('profesores',[TeacherController::class,'index'])->name('teacher.index');
Route::post('profesores/guardar',[TeacherController::class,'store'])->name('teacher.store');
Route::get('profesores/editar/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::put('profesores/actualizar/{id}',[TeacherController::class,'update'])->name('teacher.update');
Route::get('profesores/eliminar/{id}',[TeacherController::class,'destroy'])->name('teacher.delete');

Route::get('asignaturas',[SubjectController::class,'index'])->name('subject.index');
Route::post('asignaturas/guardar',[SubjectController::class,'store'])->name('subject.store');
Route::get('asignaturas/editar/{id}',[SubjectController::class,'edit'])->name('subject.edit');
Route::put('asignaturas/actualizar/{id}',[SubjectController::class,'update'])->name('subject.update');
Route::get('asignaturas/eliminar/{id}',[SubjectController::class,'destroy'])->name('subject.delete');