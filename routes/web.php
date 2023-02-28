<?php

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




Route::resource('apartments', \App\Http\Controllers\ApartmentsController::class);
Route::resource('sales', \App\Http\Controllers\SalesController::class);
Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::resource('customers', \App\Http\Controllers\CustomerController::class);
Route::resource('welcome', \App\Http\Controllers\WelcomeController::class);

