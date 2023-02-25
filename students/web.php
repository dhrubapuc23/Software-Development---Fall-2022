<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
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

/*Route::get('/{name}', function ($name) {
    return view('welcome',['name'=>$name]);
});*/
Route::get('/', function () {
    return view('welcome');
    //return redirect('contact');
});

Route::get('/hello/{name?}/{id?}', function ($name=null,$id = null) {
    $data = compact('name','id');
    return view('hello')->with($data);
});

//Route::view("about",'about')
//Route::view("contact",'contact');

Route::get("users/{user}",[Users::class,'index']);

/*Route::get('/customer', function () {
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});*/

Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer/view',[CustomerController::class,'getView']);
Route::post('/customer',[CustomerController::class,'saveInfo']);
Route::get('/customer/delete/{id}',[CustomerController::class,'deleteCustomer'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'editCustomer'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

Route::get('/student',[StudentController::class,'index']);
Route::get('/add_student',[StudentController::class,'create']);
Route::post('/add_student',[StudentController::class,'store']);
Route::get('/edit_student/{id}',[StudentController::class,'edit']);
Route::put('/update_student/{id}',[StudentController::class,'update']);
Route::get('/delete_student/{id}',[StudentController::class,'destroy']);

Route::view("contact",'students.contacts');
