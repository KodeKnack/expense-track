<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PaymentMethodController;

Route::get('/', function () {
    return view('welcome');
});

//resources for expense tracker
//automatically setting u[ the RESTful routes
Route::resource('categories', CategoryController::class);
Route::resource('expenses', ExpenseController::class);
Route::resource('paymentmethods', PaymentMethodController::class);
