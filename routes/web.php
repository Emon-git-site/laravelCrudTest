<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class, 'index']);
Route::get('/student/studentView/{id}', [StudentController::class, 'show'])->name('student.studentView');
Route::view('/student/createStudent', 'student.createStudent')->name('student.createStudent');
Route::post('/students', [StudentController::class, 'store'])->name('student.storeStudent');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.editStudent');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('student.updateStudent');
Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('student.deleteStudent');


