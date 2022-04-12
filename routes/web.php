<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('Main/homepage');
});

Route::get('/login-page', function () {
    return view('Main/login');
});

Route::get('/register-page', function () {
    return view('Main/register');
});
Route::get('/direction-page', function () {
    return view('Main/direction');
});
Route::get('/register','App\Http\Controllers\MainController@register');
Route::get('/register','App\Http\Controllers\MainController@register');
