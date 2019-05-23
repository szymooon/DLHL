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

Route::get('/home', 'HomeController@index')->name('home');

//pages controller

Route::get('/ekipa','PagesController@ekipa')->name('ekipa');
Route::get('/sponsorzy','PagesController@sponsorzy')->name('sponsorzy');
Route::get('/transmisje','PagesController@transmisje')->name('transmisje');
Route::get('/turnieje','PagesController@turnieje')->name('turnieje');
Route::get('/wiadomosci','PagesController@wiadomosci')->name('wiadomosci');
