<?php

Route::get('/', 'PageController@index')->name('andro.home');

Route::view('/services', 'pages.services')->name('andro.services');
Route::view('/gallery', 'pages.gallery')->name('andro.gallery');
Route::view('/articles', 'pages.article')->name('andro.article');
Route::view('/articles/details', 'pages.article-details')->name('andro.article.detaiils');
Route::get('/contact', 'ContactController@create')->name('andro.contact');
Route::get('/about', 'AboutController@index')->name('andro.about');

Auth::routes();



/*
 * Dashboard Routes
 */
Route::prefix('/ad-admin')->group(function () {

	Route::view('/', 'admin.pages.index')->name('admin.home');

	Route::prefix('/services')->group(function () {
		Route::view('/', 'admin.pages.service.home')->name('admin.services');
		Route::view('/create', 'admin.pages.service.create')->name('admin.service.create');
	});

	Route::prefix('/articles')->group(function () {
		Route::view('/', 'admin.pages.articles.home')->name('admin.articles');
		Route::view('/create', 'admin.pages.articles.create')->name('admin.article.create');
	});

});
