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

Route::get('/', 'HomeController@init');

Route::get('products', 'ProductController@init');

Route::get('products/insert', function () {
    return view('insert-product',['categories' => app('App\Models\Category')->get()]);
});

Route::get('login', function () {
    return view('login');
});


Route::get('products/preview/{id}', 'ProductController@preview');
Route::post('products/preview', 'ProductController@preview');

Route::get('products/edit/{id}', 'ProductController@edit');
Route::post('products/update/{id}', 'ProductController@update');

Route::post('products/store', 'ProductController@store');
Route::get('products/delete/{id}', 'ProductController@destroy');