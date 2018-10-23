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


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('arts', 'ArtsController');


Auth::routes();

Route::get('/customer', 'CustomersController@index')->name('customer.dashboard');
Route::get('/customer/logout', 'Auth\LoginController@customerLogout')->name('customer.logout');

Route::get('/home', 'HomeController@index')->name('admin.dashboard');
Route::get('/home/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


Route::prefix('admin')->group(function(){
    
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    
});

