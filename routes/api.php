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

Route::group([
    'middleware' => ['auth:user'],
    'prefix' => 'auth',
    'namespace'=>'Auth'
 ], function ($router) {
     Route::post('login', 'UsersAuthController@login')->withoutMiddleware(['auth:user']);
     Route::post('logout', 'UsersAuthController@logout');
     Route::post('refresh', 'UsersAuthController@refresh')->withoutMiddleware(['auth:user']);
     Route::get('user', 'UsersAuthController@me');
 });

 

Route::group(['namespace'=>'Categories'], function () {
    Route::resource('categories', 'CategoriesController');
});

Route::group(['namespace'=>'Services'], function () {
    Route::resource('services', 'ServicesController');
});

 