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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('homes');
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::prefix('backend')->middleware(['web','auth'])->namespace('backend')->name('backend.')->group(function (){
    Route::resource('user', 'UsersController');
    Route::resource('product', 'ProductController');

    Route::post('product/find',           'ProductController@find')                 ->name('product.find');


});
