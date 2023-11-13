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

Route::get('/emails', 'SendEmailsController@index');
Route::post('/send-email', 'SendEmailsController@ship');

Route::get('/', 'LandPageController@index');
Route::get('/list', 'UserController@list');
Route::get('/getByEmail', 'UserController@getByEmail');
Route::post('/save', 'UserController@save');

Auth::routes();


