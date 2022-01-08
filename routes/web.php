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

Route::get('/', function () { return view('welcome'); });
Route::get('/home', 'HomeController@index');
Route::get('/user/login', 'UserController@get_userdata');
// Route::get('/user/logout', 'UserController@get_userdata');
Route::get('/btc', 'PredictionbetController@get_btc_rounds');
Route::get('/eth', 'PredictionbetController@get_btc_rounds');
Route::get('/bnb', 'PredictionbetController@get_btc_rounds');

Route::get('/events', function () { return view('pages.events'); });
// Route::get('/referral', function () { return view('pages.referral'); });
