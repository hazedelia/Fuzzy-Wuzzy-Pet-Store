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

Route::get('/', 'HomeController@index')->name('');

Route::get('/kakiem', 'CatController@index')->name('kakiem');
<<<<<<< HEAD
Route:: get ('/suniem', 'DogController@index')->name('suniem');
Route:: get ('/grauzejiem', 'ItemsController@o')->name('grauzejiem');
=======
Route:: get ('/suniem', 'ItemsController@index')->name('suniem');
Route:: get ('/grauzejiem', 'RodentController@index')->name('grauzejiem');
>>>>>>> a156080c7e710b7aad24b8b6946fb56923d0b260

