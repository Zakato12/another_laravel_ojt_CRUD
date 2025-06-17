<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/
Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('home');
});

//home
Route::get('/home', [PageController::class, 'index']);
Route::get('/userlist', [PageController::class,'userlist']);
Route::get('/dashboard', [UserController::class,'index']);

//login
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.auth');

//register
Route::get('/register', [LoginController::class,'showRegister'])->name('register');
Route::post('/register', [LoginController::class,'register'])->name('register.auth');

//logout
Route::post('/logout',[LoginController::class, 'logout']);


//CRUD
Route::get('/users/update', [UserController::class, 'create'])->name('users.update');
Route::get('/users/create',[UserController::class,''])->name('users.create');
