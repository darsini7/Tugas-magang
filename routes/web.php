<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/check-login', [LoginController::class, 'check_login'])->name('login.check_login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/logout', [DashboardController::class ,'logout'])->name('dashboard.logout');
Route::get('/avatar', [AvatarController::class, 'avatar'])->name('avatar');