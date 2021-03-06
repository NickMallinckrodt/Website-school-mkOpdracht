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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/contact' , 'IndexController@contact')->name('contact');

Route::get('/docenten' , 'DocentenController@index')->name('docenten');

Route::get('/opleidingen', 'OpleidingController@index')->name('opleidingen');


Route::get('/applicatieontwikkelaar', 'OpleidingController@applicatie')->name('applicatie');

Route::get('/mediamanager', 'MediamanagerController@index')->name('mediamanager');

Route::get('/studenten-websites', 'websitesStudenten@index')->name('studenten-websites');

Route::get('/mediavormgever' , 'MediavormgeverController@index')->name('mediavormgever');
