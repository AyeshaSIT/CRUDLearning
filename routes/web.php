<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\regController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GuitarController;
use App\Models\Customer;

// Route::get('/', [BasicController::class,'index'])->name('home.index');
// Route::get('/about', [BasicController::class,'about'])->name('home.about');
// Route::get('/contact', [BasicController::class,'contact'])->name('home.contact');
Route::resource('guitars',GuitarController::class);
Route::get('/', [CustomerController::class,'index'])->name('home.index');
Route::get('/about', [CustomerController::class,'about'])->name('home.about');
Route::get('/contact', [CustomerController::class,'contact'])->name('home.contact');
Route::get('/customer/create', [CustomerController::class,'create'])->name('customer.create');
Route::get('/customer/view', [CustomerController::class,'view'])->name('customer.view');
Route::get('/customer/delete/{id}', [CustomerController::class,'destroy'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');
Route::post('/customer', [CustomerController::class,'store'])->name('customer.store');




//For database practice direct route
// Route::get('/customer',function(){
    // $customers = Customer::all();
    // echo "<pre>";
    // print_r($customers->toArray());
// });
Route::resource('/loginpage',resourceController::class);

require __DIR__.'/auth.php';
