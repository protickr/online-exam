<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);

// user sign up form show
Route::get('/users', [UserController::class, 'create']);

// user info store
Route::post('/users', [UserController::class, 'store']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// user login authentication
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// questions
Route::get('/questions', [QuestionController::class, 'index'])->middleware('auth');

// questions
Route::get('/questions/new', [QuestionController::class, 'create'])->middleware('auth');

// questions
Route::post('/questions/new', [QuestionController::class, 'store'])->middleware('auth');
