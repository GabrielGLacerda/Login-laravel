<?php

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'index'])->name('index');

Route::get('/user/create', [LoginController::class, 'create'])->name('user.create');

Route::get('/user/login', [LoginController::class, 'login'])->name('user.login');

Route::post('/auth', [LoginController::class, 'auth'])->name('auth.user');

Route::post('/user', [LoginController::class, 'store'])->name('create.user');
