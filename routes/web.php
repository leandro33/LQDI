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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/lqdi', function () {
//     return view('landpage.lqdi.index');
// });

Route::get('/emails', 'LandPageController@emails')->name('emails');

Route::get('/', 'LandPageController@index');

Auth::routes();


