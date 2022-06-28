<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CourseController;

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
Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('/', [HomeController::class, 'index'])->name('report');


Route::group(['middleware' => ['auth']], function () {
  Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('home');

  Route::get('/student/create', [StudentController::class, 'create'])->name('student-create');
  Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('student-edit');
  Route::get('/student/{student}', [StudentController::class, 'show'])->name('student-show');
  Route::post('/student', [StudentController::class, 'store'])->name('student-store');
  Route::patch('/student/{student}', [StudentController::class, 'update'])->name('student-update');
  Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student-delete');
  
  Route::get('/colleges', [CollegeController::class, 'index'])->name('college-index');
  
  Route::get('/programs', [ProgramController::class, 'index'])->name('program-index');
  
  Route::get('/courses', [CourseController::class, 'index'])->name('course-index');
});
