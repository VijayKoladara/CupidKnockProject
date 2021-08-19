<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/',[MainController::class, 'index'])->name("home");
Route::post('/',[MainController::class, 'store'])->name("store");
Route::get('/login',[MainController::class, 'login'])->name("login");
Route::post('/login',[MainController::class, 'check'])->name("check");

Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
Route::get('/admin/logout',[MainController::class, 'logout'])->name('logout');