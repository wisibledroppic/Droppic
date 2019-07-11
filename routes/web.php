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


Route::prefix('pickers')->group(function(){
    Route::get('/dashboard', ['as' => 'picker.dashboard', 'uses' => 'PickerController@index']);

    Route::get('/registration', ['as' => 'picker.registration', 'uses' => 'PickerRegistrationController@showPickersResgistrationForm']);
    Route::post('/registration', ['as' => 'picker.createregistration', 'uses' => 'PickerRegistrationController@registerPicker']);
    
    Route::get('/login', ['as' => 'picker.showlogin', 'uses' => 'PickerLoginController@showPickersLoginForm']);
    Route::post('/login', ['as' => 'picker.login.submit', 'uses' => 'PickerLoginController@login']);

    Route::get('/profile', ['as' => 'picker.showProfile', 'uses' => 'PickerController@showPickersProfile']);
    Route::post('/profile', ['as' => 'picker.editProfile', 'uses' => 'PickerController@editPickersProfile']);
});





