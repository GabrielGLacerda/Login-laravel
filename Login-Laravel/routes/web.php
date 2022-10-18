<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/user/create', [PageController::class, 'create'])->name('user.create');

Route::get('/user/login', [PageController::class, 'login'])->name('user.login');

Route::post('/createUser', [LoginController::class, 'store'])->name('create');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware()->group(function () {
    Route::post('/dash', [LoginController::class, 'dashboard'])->name('dashboard');
});
