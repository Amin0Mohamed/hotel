<?php

use Illuminate\Support\Facades\Route;

//Route::get('/',function (){return view('welcome');} );
Route::prefix('client')->group(function(){
    Route::get('/login', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
    Route::post('/login', 'Auth\ClientLoginController@login')->name('client.login.submit');
    Route::get('/', 'ClientController@index')->name('client.dashboard');
    Route::post('/logout', 'Auth\ClientLoginController@logout')->name('client.logout');

    // Registration Routes...
    Route::get('/register', 'Auth\ClientRegisterController@showRegistrationForm')->name('client.register');
    Route::post('/register', 'Auth\ClientRegisterController@register');

    //    password reset route
    Route::post('/password/email', 'Auth\ClientForgotPasswordController@sendResetLinkEmail')->name('client.password.email');
    Route::get('/password/reset', 'Auth\ClientForgotPasswordController@showLinkRequestForm')->name('client.password.request');
    Route::post('/password/reset', 'Auth\ClientResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\ClientResetPasswordController@showResetForm')->name('client.password.reset');
});


Auth::routes();
Route::post('/user/logout', 'Auth\LoginController@userlogout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');

