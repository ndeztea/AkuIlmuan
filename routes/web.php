<?php

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
    return view('home');
});

Route::get('register', 'RegisterController@index');
Route::post('register/action', 'AuthController@register_action');
Route::get('register/activation', 'AuthController@register_activation');

Route::get('login', 'AuthController@login');
Route::post('login/action', 'AuthController@login_action');

Route::get('profile', 'ProfileController@index');
Route::get('profile/{id}', 'ProfileController@profile');
Route::get('profile/edit/{id}', 'ProfileController@profile_edit');
Route::post('profile/save', 'ProfileController@profile_save');

Route::get('directory', 'DirectoryController@index');




