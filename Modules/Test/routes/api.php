<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
*/

Route::middleware(['CanReadPostsMiddleWare'])->prefix('v1')->name('api.')->group(function () {
    Route::namespace('Modules\Test\App\Http\Controllers')->get('test', 'PostsController@index')->name('test.index');
});
Route::middleware(['CanReadPostsMiddleWare'])->prefix('v1')->name('api.')->group(function () {
    Route::namespace('Modules\Test\App\Http\Controllers')->get('test2', 'PostsController@index2')->name('test.index2');
});