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

//Admin

//Login
Route::get('admin/login', 'Admin\AdminController@login');
Route::post('admin/login', 'Admin\AdminController@AuthLogin')->name('admin-login');
Route::get('admin/logout', 'Admin\AdminController@Logout')->name('admin-logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('home', 'HomeController@admin')->name('admin-home');
    Route::get('products', 'Admin\ProductController@index');
    Route::get('catalogs', 'Admin\CatalogController@index');
    Route::get('customers', 'Admin\CustomerController@index');
    Route::get('orders', 'Admin\OrderController@index');
    Route::get('product/add', 'Admin\ProductController@create')->name('admin.product_create');
    Route::post('product/store', 'Admin\ProductController@store');

    Route::resource('p', 'Admin\ProductsController');
});