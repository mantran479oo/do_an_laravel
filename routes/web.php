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
    Route::get('/category','HomeController@category')->name('home.category');
    Route::get('/registration','HomeController@registration')->name('home.registration');
    Route::get('/checkout-cart','HomeController@checkoutCart')->name('home.checkout-cart');
    Route::get('/shopping-cart','HomeController@shoppingCart')->name('home.shopping-cart');
    Route::get('/index', 'HomeController@index')->name('frontend.home');
});

Route::group(['prefix' => $admin, 'namespace' => 'Admin'], function () {
    Route::post('product/add', 'ProductController@store')->name('admin.product.add');
});
