<?php

use Illuminate\Support\Facades\Route;

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
//Routes for shopping cart site
Route::get('/', 'CartController@shop')->name('shop');
Route::get('/shop', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
Route::get('/wishlist-cart', 'WishListCartController@cart')->name('wishListCart.index');
Route::post('/wishlist-add', 'WishListCartController@add')->name('wishListCart.store');
Route::post('/wishlist-update', 'WishListCartController@update')->name('wishListCart.update');
Route::post('/wishlist-remove', 'WishListCartController@remove')->name('wishListCart.remove');
Route::post('/wishlist-clear', 'WishListCartController@clear')->name('wishListCart.clear');

