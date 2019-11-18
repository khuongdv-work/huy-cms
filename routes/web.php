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

Route::get('/', 'Website\HomeController@index')->name('website.home.index');
Route::post('/post-contact', 'Website\HomeController@createNewContact')->name('website.postContact');
Route::get('/pages/{slug}', 'Website\HomeController@page')->name('website.page');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
