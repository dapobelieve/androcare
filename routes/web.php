<?php

Route::get('/', 'PageController@index')->name('andro.home');

Route::view('/services', 'pages.services')->name('andro.services');
Route::view('/gallery', 'pages.gallery')->name('andro.gallery');
Route::view('/articles', 'pages.article')->name('andro.article');
Route::view('/articles/details', 'pages.article-details')->name('andro.article.detaiils');

Route::get('/contact', 'ContactController@create')->name('andro.contact');

Route::get('/about', 'AboutController@index')->name('andro.about');

Auth::routes();
