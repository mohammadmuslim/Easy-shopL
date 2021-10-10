<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('login', function () {
    return view('login');
});

Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post('/login',[UserController::Class,'login']);
Route::get('/',[ProductController::Class,'index']);
Route::get('/detail/{id}',[ProductController::Class,'detail']);
Route::get('/detail/{id}',[ProductController::Class,'detail']);
Route::get('/search',[ProductController::Class,'search']);
Route::post('/add_to_card',[ProductController::Class,'addToCart']);
Route::get('/cartlist',[ProductController::Class,'cartlist']);
Route::get('/removecart/{id}',[ProductController::Class,'removecart']);

Route::get('order',[ProductController::Class,'order']);
Route::post('confirmorder',[ProductController::Class,'confirmorder']);
Route::get('orderlist',[ProductController::Class,'orderlist']);
Route::view('reg','registaion');
Route::post('/register',[UserController::Class,'register']);