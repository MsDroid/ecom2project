<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\ContactController;
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



Route::get('/',[userController::class,'index'])->name('home');
Route::get('/home',[userController::class,'index']);
Route::post('userlogin',[userController::class,'userlogin']);
Route::get('contact',[ContactController::class,'index']);


