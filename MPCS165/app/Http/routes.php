<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Create
    // Route::post();
    // //Read
    // Route::get();
    // //Update
    // Route::put();
    // //Delete
    // Route::delete();

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(array('middleware'=>'auth'),function(){
  Route::resource('product', 'ProductController');
  Route::post('/product/store', 'ProductController@store');
  Route::get('/profile', 'ProfileController@index');
  Route::get('/cart', 'CartController@index');
  Route::post('/product/add_cart', 'CartController@add_cart');
  Route::post('/cart/remove_cart', 'CartController@remove_cart');
  Route::get('/cart/check_out','CartController@check_out');
  Route::get('/profile/order_history', 'ProfileController@order_history');
  Route::get('/profile/update', 'ProfileController@update');
  Route::post('/profile/store', 'ProfileController@store');
});

// Route::group(['middleware' => 'web'], function () {
//     Route::get('access', function () {
//         echo 'You have arrived';
//     })->middleware('isAdmin');
//
// });
