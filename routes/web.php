<?php


Route::get('/', 'FrontController@index')->name('andro.index');
Route::get('/contact', 'ContactController@index')->name('andro.contact');