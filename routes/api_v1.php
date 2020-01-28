<?php

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

Route::get('/', 'HomeController@index');

Route::group([
    'middleware' => 'api',
], function () {
    Route::post('auth/login', 'Auth\AuthController@login');
    Route::post('auth/logout', 'Auth\AuthController@logout');
    Route::post('auth/refresh', 'Auth\AuthController@refresh');

    Route::get('me', 'HomeController@me');
});
