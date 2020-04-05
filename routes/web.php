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

Route::group(['prefix' => 'ajax'], function () {
    Route::get('/user', 'Ajax\UserController@user')->name('ajax.user');
    Route::post('/login', 'Ajax\UserController@login')->name('ajax.login');
    Route::post('/create', 'Ajax\UserController@create')->name('ajax.create');
});

Route::post('/', 'Web\PagesController@home')->name('home');
Route::post('/register/{page}', 'Web\PagesController@register')->name('register');
