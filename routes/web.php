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

use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Route;

Route::get('/', [
   'as' => 'home_path',
   'uses' => 'PagesController@home'
]);

// Route::get('/test-mail', function() {
//    return  new ContactMessageCreated('DK-codeur', 'derco@dk.co', 'nouveau msg !');
// });


Route::get('/about', [
   'as' => 'about',
   'uses' => 'PagesController@about'
]);

Route::get('/contact', 'ContactController@create')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact');

