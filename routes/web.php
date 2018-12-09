<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    if(Auth::check()) {
        return redirect()->to(route('home'));
    } else {
        return redirect()->to(route('auth.login'));
    }
});

Route::get('/auth/register', ['as' => 'auth.register', 'uses' => '\Atlas\Http\Controllers\Auth\RegisterController@showRegistrationForm']);
Route::post('/auth/register', ['as' => 'auth.register', 'uses' => '\Atlas\Http\Controllers\Auth\RegisterController@register']);

Route::get('/auth/login', ['as' => 'auth.login', 'uses' => '\Atlas\Http\Controllers\Auth\LoginController@showLoginForm']);
Route::post('/auth/login', ['as' => 'auth.login', 'uses' => '\Atlas\Http\Controllers\Auth\LoginController@login']);
Route::any('/auth/logout', ['as' => 'auth.logout', 'uses' => '\Atlas\Http\Controllers\Auth\LoginController@logout']);
Route::any('/auth/forgot_password', ['as' => 'auth.forgot_password', 'uses' => '\Atlas\Http\Controllers\Auth\LoginController@logout']);

Route::get('/home', ['as' => 'home', 'uses' => '\Atlas\Http\Controllers\HomeController@index']);

Route::get('{name?}', 'CorePlusController@showView');
