<?php

use App\Http\Controllers\vehicleController;
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

Route::prefix('vehicle')->name('vehicle.')->controller(vehicleController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    //Route::get('/', 'store')->name('store');
    Route::get('/{vehicle}', 'show')->name('show');
    Route::get('/{vechicle}/edit', 'edit')->name('edit');
    Route::get('/{vechicle}', 'update')->name('update');
    Route::get('/{vechicle}', 'destroy')->name('destroy');
});
