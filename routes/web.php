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

$page = 'frontend';
$admin = 'admin';

Route::group(['prefix' => $page, 'namespace' => 'Frontend'], function () {
    Route::post('/add-wish-list/{id}','OrderController@addWishList')->name('add-wish-list');
    Route::get('/wish-list','HomeController@wishList')->name('home.wish-list');
    Route::get('/my-account','HomeController@myAccount')->name('home.my-account');
    Route::post('/add-to-cart/{id}','OrderController@addToCart')->name('addToCart');
    Route::get('/product-detail/{id}','HomeController@productDetail')->name('home.detail-product');
    Route::get('/send-mail','UserController@sendMail')->name('mail-send');
    Route::get('/category/{id}','HomeController@category')->name('home.category');
    Route::get('/registration','HomeController@registration')->name('home.registration');
    Route::get('/checkout-cart','HomeController@checkoutCart')->name('home.checkout-cart');
    Route::get('/shopping-cart','HomeController@shoppingCart')->name('home.shopping-cart');
    Route::get('/index', 'HomeController@index')->name('frontend.home');
});

Route::group(['prefix' => $admin, 'namespace' => 'Admin'], function () {
    Route::get('/table-product','IndexController@tableProduct')->name('admin.product-table');
    Route::get('/chartjs','IndexController@chartjs')->name('admin.chartjs');
    Route::get('/dashboard','IndexController@dashboard')->name('admin.dashboard');
    Route::post('product/add', 'ProductController@store')->name('admin.product.add');
});
