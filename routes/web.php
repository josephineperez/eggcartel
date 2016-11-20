<?php


use App\User;
use App\Item;

 Route::get('/', function () {
    return view('welcome');
 });

  Route::get('/location', function () {
    return view('location');
 });

   Route::get('/home', function () {
    return view('home');
 });

   Route::get('/my_cart', function () {
    return view('my_cart');
 });

 
Auth::routes();

// auth routes
Route::group(['middleware' => 'auth'], function () {

  Route::get('orders/cart/{id}', 'OrdersController@cart')->name('cart');;
  
  Route::post('orders/cart/{id}/processing', 'OrdersController@processing')->name('orders.processing');
  Route::get('orders/cart/{id}/summary', 'OrdersController@summary')->name('orders.summary');

	Route::resource('orders', 'OrdersController');

});

