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
    return view('layouts/master');
});


Route::get('/index','PageController@index')->name('page.index');
Route::get('/contact','PageController@contact')->namE('page.contact');

Route::get('/products','ProductController@products')->name('product.index');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/','AdminPagesController@index')->name('admin.index');

    // Product
    Route::get('/product/create','ProductController@getcreate')->name('admin.product.getcreate');
    Route::post('/product/create','ProductController@postcreate')->name('admin.product.postcreate');
});


