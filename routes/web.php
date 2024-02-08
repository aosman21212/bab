<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Route::get('/fetch-product-services', 'clientdataController@fetchProductServices');

Route::group(['middleware' => ['permission: Create']], function () {
    Route::post('/clients', 'App\Http\Controllers\ClientsController@store')->name('clients.store');

    Route::get('/clients/create', 'App\Http\Controllers\ClientsController@create')->name('clients.create');
});


Route::resource('users', UserController::class)->middleware('auth');


Route::resource('roles', App\Http\Controllers\rolesController::class);
Route::get('/users/assignroles/{id}', 'App\Http\Controllers\UserController@assignRoles')->name('users.assignroles');
Route::patch('/users/updateroles/{id}', 'App\Http\Controllers\UserController@updateRoles')->name("roles.rolesupdate");
Route::get('/roles/assignpermissions/{id}', 'App\Http\Controllers\RolesController@assignPermissions')->name('roles.assignpermissions');
Route::patch('/roles/updatepermissions/{id}', 'App\Http\Controllers\RolesController@updatePermissions')->name("roles.permissionsupdate");
Route::resource('permissions', App\Http\Controllers\permissionsController::class);
