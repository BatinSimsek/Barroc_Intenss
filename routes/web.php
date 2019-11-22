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

Route::post('welcome/submit', function () {
  return Request::all();
})->name('contact-form-submit');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('privacy', 'privacyController');
Route::resource('offer', 'QuotationsController');
Route::resource('offercheck', 'OfferCheckController');

