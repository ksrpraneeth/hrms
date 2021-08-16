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

Route::post('/employee','App\Http\Controllers\EmployeeController@store');
Route::get('/employee','App\Http\Controllers\EmployeeController@get');

Route::get('/get_user_roles','App\Http\Controllers\UserRolesController@get');

Route::post('/register','App\Http\Controllers\UserController@register');
