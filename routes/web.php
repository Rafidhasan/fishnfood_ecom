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

Route::get('/',  'HomeController@index');

Auth::routes();

// Admin Pages
Route::get('/admin', 'AdminController@index')->middleware('admin');

// category pages
Route::get('/categories', 'AdminController@index')->middleware('admin');
Route::get('/add_category', 'CategoryController@show')->middleware('admin');
Route::get('/edit_category/{id}', 'CategoryController@edit')->middleware('admin');
Route::post('/admin', 'CategoryController@store')->middleware('admin');
Route::post('/admin/{category_id}', 'CategoryController@update')->middleware('admin');
Route::get('/delete_category/{category_id}', 'CategoryController@delete')->middleware('admin');

// Items Pages
Route::get('/items', 'AdminController@items')->middleware('admin');
Route::get('/add_item', 'ItemController@show')->middleware('admin');
