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

Route::get('/about', function () {
   echo "about";
});

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kakiem', 'CatController@index')->name('kakiem');
Route:: get ('/suniem', 'ItemsController@index')->name('suniem');
Route:: get ('/grauzejiem', 'ItemsController@index')->name('grauzejiem');

