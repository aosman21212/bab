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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('vendors', App\Http\Controllers\vendorsController::class);


Route::resource('clients', App\Http\Controllers\clientsController::class);


Route::resource('babacctmanagers', App\Http\Controllers\babacctmanagersController::class);


Route::resource('productservices', App\Http\Controllers\productservicesController::class);


Route::resource('vendordatas', App\Http\Controllers\vendordataController::class);


Route::resource('clientdatas', App\Http\Controllers\clientdataController::class);
Route::get('/fetch-product-services', 'clientdataController@fetchProductServices');
