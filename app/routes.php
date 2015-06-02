<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Associating route parameters
Route::model('book', 'Book');

//Pages
Route::get('/', 'BookController@index');
Route::get('/create', 'BookController@create');
Route::get('/edit/{book}', 'BookController@edit');
Route::get('/delete/{book}', 'BookController@delete');

//Management 
Route::post('/create', 'BookController@manageCreateBook');
Route::post('/edit', 'BookController@manageEditBook');
Route::post('/delete', 'BookController@manageDeleteBook');


