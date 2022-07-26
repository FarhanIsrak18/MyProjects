<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\managerController;
use App\Http\Controllers\customerController;
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

//Login 
Route::get('/login',[adminController::class,'login'])->name('login');
Route::post('/login',[adminController::class,'loginSubmit'])->name('login.submit');
Route::get('/logout',[adminController::class,'logout'])->name('logout');



//Admin
Route::get('/admin/registration',[adminController::class,'registration'])->name('admin.registration');
Route::post('/admin/registration',[adminController::class,'registrationSubmit'])->name('admin.registration.submit');
Route::get('/admin/home',[adminController::class,'Home'])->name('admin.home');









//Manager
Route::get('/manager/registration',[managerController::class,'registration'])->name('manager.registration');
Route::post('/manager/registration',[managerController::class,'registrationSubmit'])->name('manager.registration.submit');
Route::get('/manager/home',[managerController::class,'Home'])->name('manager.home');
Route::get('/manager/profile',[managerController::class,'Profile'])->name('manager.profile');




//stuff





//customer
Route::get('/customer/registration',[customerController::class,'registration'])->name('customer.registration');
Route::post('/customer/registration',[customerController::class,'registrationSubmit'])->middleware('auth.customer')->name('customer.registration.submit');
Route::get('/customer/home',[customerController::class,'home'])->middleware('auth.customer')->name('customer.home');
Route::get('/customer/profile',[customerController::class,'profile'])->middleware('auth.customer')->name('customer.profile');
Route::get('/customer/edit',[customerController::class,'edit'])->middleware('auth.customer')->name('customer.edit');
Route::post('/customer/editsubmit',[customerController::class,'editsubmit'])->middleware('auth.customer')->name('customer.edit.submit');
Route::post('/customer/deletesubmit',[customerController::class,'deletesubmit'])->middleware('auth.customer')->name('customer.delete.submit');
Route::get('/customer/services',[customerController::class,'services'])->middleware('auth.customer')->name('customer.services');
Route::post('/customer/servicesubmit',[customerController::class,'servicesubmit'])->middleware('auth.customer')->name('customer.service.submit');
Route::get('/customer/orderpage',[customerController::class,'orderpage'])->middleware('auth.customer')->name('customer.orderpage');//shows the order 
Route::post('/customer/ordersubmit',[customerController::class,'ordersubmit'])->middleware('auth.customer')->name('customer.order.submit');
Route::post('/customer/search',[customerController::class,'search'])->middleware('auth.customer')->name('customer.search');
Route::get('/customer/servicehistory',[customerController::class,'servicehistory'])->middleware('auth.customer')->name('customer.service.history');
Route::post('/customer/cartsubmit',[customerController::class,'cartsubmit'])->name('customer.cartsubmit');