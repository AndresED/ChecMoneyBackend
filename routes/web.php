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
    if (Auth::check()) {
	    return redirect()->route('dashboard');
	}else{
    	return view('home');
	}
});

Route::get('/login', function () {
    return view('login');
})->name("login");


Route::get('dashboard', 'HomeController@showDashboard')->name("dashboard");



Route::post('register-account', 'AccountController@register');
Route::get('deleted-account/{id}', 'AccountController@deleted');


Route::post('register-category', 'CategoryController@register');
Route::get('deleted-category/{id}', 'CategoryController@deleted');

Route::post('register-transaction', 'TransactionController@register');
Route::get('deleted-transaction/{id}', 'TransactionController@deleted');


Route::get('logout', 'Auth\SocialAuthController@logout');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
