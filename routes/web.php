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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('droppers')->group(function(){
    Route::get('/dashboard', ['as' => 'dropper.dashboard', 'uses' => 'DropperController@index']);

    Route::get('/registration', ['as' => 'dropper.registration', 'uses' => 'DropperRegistrationController@showDroppersResgistrationForm']);
    Route::post('/registration', ['as' => 'dropper.createregistration', 'uses' => 'DropperRegistrationController@registerDropper']);
    
    Route::get('/login', ['as' => 'dropper.showlogin', 'uses' => 'DropperLoginController@showDroppersLoginForm']);
    Route::post('/login', ['as' => 'dropper.login.submit', 'uses' => 'DropperLoginController@login']);

    Route::get('/profile', ['as' => 'dropper.showProfile', 'uses' => 'DropperController@showDroppersProfile']);
    Route::post('/profile', ['as' => 'dropper.editProfile', 'uses' => 'DropperController@editDroppersProfile']);
});





