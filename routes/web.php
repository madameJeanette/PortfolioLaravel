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


Route::get('/', 'PagesController@index');    //route for general pages
Route::get('/about', 'PagesController@about');  //route about page
Route::get('/services', 'PagesController@services'); //route services page

Route::resource('arts', 'ArtsController');    //gets art controller for use in other pages


Auth::routes(); //authenticates routes for user roles
Route::get('/customer', 'CustomersController@index')->name('customer.dashboard');
Route::post('/customer/logout', 'Auth\LoginController@customerLogout')->name('customer.logout');

Route::get('/home', 'HomeController@index')->name('admin.dashboard');
Route::post('/home/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/queries', 'QueryController@search');
Route::post('/queries', 'QueryController@search')->name('queries.search'); //route for searchbar queries
Route::get('/queries', 'QueryController@index')->name('queries.index');//route for filter function

Route::prefix('admin')->group(function(){
    
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login'); //show login form admin
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit'); //submit login form admin
    
    
});



Route::post('/favorite/{art}', 'ArtsController@favoriteArt'); //posts art to favorites
Route::post('/unfavorite/{art}', 'ArtsController@unFavoriteArt'); //posts art to unfavorites

Route::get('my_favorites', 'CustomersController@myFavorites')->middleware('auth'); //makes favorites list page only viewable from customer side.






