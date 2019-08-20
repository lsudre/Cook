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

// Route::group(['prefix' => 'admin', 'middleware' => 'authenticate'], function () {
//    Route::get('/', function() {
//        return "panel admin";
//    });
// });

// Route::get('/ip', ['middleware' => 'ip'], function() {
//     return "Ip";
// });

Route::get('/list-products', 'ListProducts@getList')->name('list-products');
Route::post('/list-products', 'ListProducts@postList')->name('list-products');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
