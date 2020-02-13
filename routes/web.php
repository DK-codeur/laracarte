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

use Illuminate\Support\Facades\Route;

Route::get('/', [
   'as' => 'home_path',
   'uses' => 'PagesController@home'
]);


Route::get('/about', [
   'as' => 'about',
   'uses' => 'PagesController@about'
]);

Route::get('/contact', 'ContactController@create')->name('contact');
