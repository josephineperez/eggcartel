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



// Route::get('/', function () {
   

// 	// $users = User::with('orders.items.eggs.bases')->get();

// 	$users = User::with('orders.items.eggs')
// 	              ->with('orders.items.base')
// 	              ->with('orders.items.cheeses')
// 	              ->with('orders.items.meats')
// 	              ->with('orders.items.toppings')
// 	              ->get();

// 	$items = Item::with('base')->get();

// 	// return $items;

// // $users = App\User::with(['posts' => function ($query) {
// //     $query->where('title', 'like', '%first%');
// // }])->get();


// 	return $users;



// });

// view cat
// Route::get('cats/{cat}', 'CatsController@show');

Auth::routes();



// auth routes
Route::group(['middleware' => 'auth'], function () {
	// all cat routes
	Route::resource('orders', 'OrdersController');
    Route::resource('cats', 'CatsController');
    Route::resource('toys', 'ToysController');

});

