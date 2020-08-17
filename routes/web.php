<?php


Route::get('/', 'FrontController@index')->name('andro.index');
Route::get('/contact', 'ContactController@create')->name('andro.contact');
Route::get('/about', 'AboutController@index')->name('andro.about');