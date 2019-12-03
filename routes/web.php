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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PageController@index')->name('index');
Route::get('/prueba', 'PageController@prueba')->name('prueba');
Route::get('/nosotros', 'PageController@nosotros')->name('nosotros');
Route::get('/galeria', 'PageController@galeria')->name('galeria');
Route::get('/citas', 'PageController@citas')->name('citas');
Route::get('/petshop', 'PageController@petshop')->name('petshop');
Route::get('/contactanos', 'PageController@contactanos')->name('contactanos');

Route::resource('products', 'ProductController');
Route::resource('dates', 'DateController');

Route::get('home', function(){ return view('home');})->middleware('auth')->name('home');

//Creamo la ruta para enviar los datos del formulario de contacto
Route::post('contact','MessageController@store')->name('contact');