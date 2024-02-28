<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('Customers\Http\Controllers')->group(function(){
    Route::prefix(config('customers.prefix.backend',config('module.prefix.backend')))->namespace('Backend')->group(function(){
        Route::get('customers','Customers@index');
        }
    );
    Route::prefix(config('customers.prefix.frontend', config('module.prefix.frontend')))->namespace('Frontend')->group(function () {
        Route::get('customers', 'Customers@index');
        }
    );
});