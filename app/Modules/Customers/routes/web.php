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
    Route::prefix(config('customers.prefix.backend',config('module.prefix.backend')).'/'.config('customers.module-name'))->namespace('Backend')->group(function(){
        Route::get('all','Customers@index');
        }
    );
    Route::prefix(config('customers.prefix.frontend', config('module.prefix.frontend')).'/'.config('customers.module-name'))->namespace('Frontend')->group(function () {
        Route::get('all', 'Customers@index');
        }
    );
});