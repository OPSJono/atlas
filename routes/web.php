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

/**
 * Register Routes
 * */
Route::get('/auth/register', '\Atlas\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('auth.register');
Route::post('/auth/register', '\Atlas\Http\Controllers\Auth\RegisterController@register')->name('auth.register');

/**
 * Login/out Routes
 * */
Route::get('/auth/login', '\Atlas\Http\Controllers\Auth\LoginController@showLoginForm')->name('auth.login');
Route::post('/auth/login', '\Atlas\Http\Controllers\Auth\LoginController@login')->name('auth.login');
Route::any('/auth/logout', '\Atlas\Http\Controllers\Auth\LoginController@logout')->name('auth.logout');
Route::any('/auth/forgot_password', '\Atlas\Http\Controllers\Auth\LoginController@logout')->name('auth.forgot_password');

/**
 * Locked Routes
 * */
Route::get('/auth/login/lock', 'Auth\LoginController@lock')->middleware('auth')->name('auth.login.lock');
Route::get('/auth/login/locked', 'Auth\LoginController@locked')->middleware('auth')->name('auth.login.locked');
Route::post('/auth/login/locked', 'Auth\LoginController@unlock')->name('auth.login.unlock');


/**
 * Dashboard/Homepage Routes
 * */
Route::get('/home', ['as' => 'home', 'uses' => '\Atlas\Http\Controllers\HomeController@index']);

/**
 * User Routes.
 * Index
 * List
 * CRUD
 * */
Route::get('/user', '\Atlas\Http\Controllers\UserController@index')->middleware('auth')->name('user');
Route::get('/user/deleted', '\Atlas\Http\Controllers\UserController@deleted')->middleware('auth')->name('user.deleted');
Route::get('/user/deleted/list', '\Atlas\Http\Controllers\UserController@deletedList')->middleware('auth')->name('user.deleted.list');
Route::get('/user/list', '\Atlas\Http\Controllers\UserController@list')->middleware('auth')->name('user.list');
Route::any('/user/create', '\Atlas\Http\Controllers\UserController@create')->middleware('auth')->name('user.create');
Route::get('/user/{id}/view', '\Atlas\Http\Controllers\UserController@view')->middleware('auth')->name('user.view');
Route::any('/user/{id}/update', '\Atlas\Http\Controllers\UserController@update')->middleware('auth')->name('user.update');
Route::any('/user/{id}/delete', '\Atlas\Http\Controllers\UserController@delete')->middleware('auth')->name('user.delete');

/**
 * Company Routes.
 * Index
 * List
 * CRUD
 * */
Route::get('/company', '\Atlas\Http\Controllers\CompanyController@index')->middleware('auth')->name('company');
Route::get('/company/deleted', '\Atlas\Http\Controllers\CompanyController@deleted')->middleware('auth')->name('company.deleted');
Route::get('/company/deleted/list', '\Atlas\Http\Controllers\CompanyController@deletedList')->middleware('auth')->name('company.deleted.list');
Route::get('/company/list', '\Atlas\Http\Controllers\CompanyController@list')->middleware('auth')->name('company.list');
Route::any('/company/create', '\Atlas\Http\Controllers\CompanyController@create')->middleware('auth')->name('company.create');
Route::get('/company/{id}/view', '\Atlas\Http\Controllers\CompanyController@view')->middleware('auth')->name('company.view');
Route::any('/company/{id}/update', '\Atlas\Http\Controllers\CompanyController@update')->middleware('auth')->name('company.update');
Route::any('/company/{id}/delete', '\Atlas\Http\Controllers\CompanyController@delete')->middleware('auth')->name('company.delete');

Route::get('{name?}', 'CorePlusController@showView');
