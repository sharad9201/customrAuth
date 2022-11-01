<?php

use App\Http\Controllers\AuthController;
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

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'login'])->name('login');

Route::get('register',[AuthController::class,'register_view'])->name('register');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::get('home',[AuthController::class,'home'])->name('home');
Route::get('logout',[AuthController::class,'logout'])->name('logout');


