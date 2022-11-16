<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController; //add the ControllerNameSpace
use App\Http\Controllers\StudentController; //add the ControllerNameSpace



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Auth::routes();

Route::get('/tutor', [App\Http\Controllers\TutorController::class, 'index'])->name('tutor');
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Auth::routes();