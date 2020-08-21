<?php

Route::get('/', 'PageController@index')->name('andro.index');

Route::view('/services', 'pages.services')->name('andro.services');
Route::view('/gallery', 'pages.gallery')->name('andro.gallery');

Route::get('/contact', 'ContactController@create')->name('andro.contact');

Route::get('/about', 'AboutController@index')->name('andro.about');

Auth::routes();
