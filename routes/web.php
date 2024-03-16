<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1/{name}/{lastname?}', [UserController::class, 'show'])->whereAlpha('name')->whereAlpha('lastname')->name('username');
 
Route::get('/{mathoperation}/{num1}/{num2}', [MathController::class, 'show'])->whereNumber('num1')->whereNumber('num2');
 
Route::get('/{name}/{lastname}/{age}/{gender}/{rm}/{address}', [UserInfoController::class, 'index']);

Route::get('/user/{name}', [UserController::class, 'show']);

Route::get('/products', [ProductsController::class, 'index']);