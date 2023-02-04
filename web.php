<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
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

Route::get('/user',[UserController::class, 'getUser']);
Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'registerUser']);
Route::get('/customer',[CustomerController::class, 'index']);
Route::post('/customer',[CustomerController::class, 'storeData']);
Route::get('/customer/viewcustomer',[CustomerController::class, 'getcustomerview'])->name('customer.view');
Route::get('/customer/delete/{id}',[CustomerController::class, 'deleteCustomer']);
Route::get('/customer/edit/{id}',[CustomerController::class, 'editCustomer']);
Route::post('/customer/update/{id}',[CustomerController::class, 'update']);
