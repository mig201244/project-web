<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

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
//route user
use App\Http\Controllers\UserController;
Route::resource('users', UserController::class);

//route department
use App\Http\Controllers\DepartmentController;
Route::resource('departments', DepartmentController::class);

//Route backoffices
use App\Http\Controllers\BackofficeController;
Route::resource('backoffices', BackofficeController::class);

Route::get('/',  [IndexController::class, 'index'])->name('welcome');


Route::get('register', [RegisterController::class, 'showRegistrationForm']);
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::get('login', [LoginController::class, 'showLoginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');