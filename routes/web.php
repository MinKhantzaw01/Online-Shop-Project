<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware'=>'ShareData'],function(){
    Route::get('/','PageController@index');
    Route::get('/product/category/{slug}','PageController@byCategory');
    // Route::get('/category/search','PageController@search');

    Route::get('/login','User\AuthController@showLogin');
    Route::post('/login','User\AuthController@postLogin');
    Route::get('/logout','User\AuthController@logout');
    Route::get('/register','User\AuthController@showRegister');
    Route::post('/register','User\AuthController@postRegister');

    Route::get('/product/cart/add/{slug}','PageController@addToCart');
    Route::get('/product/{slug}','PageController@productDetail');
    Route::get('/cart','PageController@cart');
    Route::get('/order/make','PageController@makeOrder');

    Route::get('/order/pending','PageController@pendingOrder');
    Route::get('/order/complete','PageController@completeOrder');

    Route::get('/profile','PageController@profile');
    Route::post('/profile','PageController@changeProfile');
});



Route::get('/admin/login','Admin\AuthController@showLogin');
Route::post('/admin/login','Admin\AuthController@postLogin');

Route::group(['prefix'=>'admin','namespace'=>'Admin','as'=>'admin.','middleware'=>'Admin'],function(){
    Route::get('/','PageController@dashboard');
    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');
    Route::get('/order/pending','OrderController@pending');
    Route::get('/order/complete','OrderController@complete');
    Route::get('/order/complete/{id}','OrderController@makeComplete')->name('order.complete');
    Route::get('/user','PageController@userAll');
    Route::get('/logout','AuthController@logout');
});
