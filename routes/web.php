<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Request;

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

/* Route::get('/welcome', function () {
    return view('welcome');
}); */

    Route::get('/registration', [AuthenController::class, 'registration']);
    Route::post('/registration-user', [AuthenController::class, 'registerUser'])->name('register-user');
    Route::get('/', [AuthenController::class, 'login']);
    Route::post('/login-user', [AuthenController::class, 'loginUser'])->name('login-user');
    Route::get('/dashboard', [AuthenController::class, 'dashboard']);
    Route::get('/logout', [AuthenController::class, 'logout']);
    Route::get('/student-list', [TeacherController::class, 'student']);
    Route::get('/teacher/add', [TeacherController::class, 'add']);
    Route::post('/add-student', [TeacherController::class, 'addStudent'])->name('add-student');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit']);
    Route::post('/edit-student', [TeacherController::class, 'update']);
    Route::any('/teacher/delete/{id}', [TeacherController::class, 'delete']);
    

