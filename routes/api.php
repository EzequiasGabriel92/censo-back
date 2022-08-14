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

Route::get('/admins', 'App\Http\Controllers\AdminController@index'); //mostrar todos los registros
Route::post('/admins', 'App\Http\Controllers\AdminController@store'); //Crear registros de admins

Route::get('/users', 'App\Http\Controllers\UserController@index'); //mostrar todos los registros
Route::post('/users', 'App\Http\Controllers\UserController@store'); //Crear registros de usuarios
Route::put('/users/{id}', 'App\Http\Controllers\UserController@update'); //actualizar users

Route::get('/notifications', 'App\Http\Controllers\NotificationController@index'); //mostrar todos los registros
Route::post('/notifications', 'App\Http\Controllers\NotificationController@store'); //Crear registro

