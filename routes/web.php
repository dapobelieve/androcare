<?php

Route::get('/', 'PageController@index')->name('andro.home');

Route::prefix('/services')->group(function () {
	Route::get('/', 'PageController@services')->name('andro.services');
	Route::get('/{service}', 'PageController@serviceDetails')->name('andro.service.details');
});

Route::prefix('/articles')->group(function () {
	Route::view('/', 'pages.article')->name('andro.article');
	Route::view('/details', 'pages.article-details')->name('andro.article.detaiils');
});

Route::view('/gallery', 'pages.gallery')->name('andro.gallery');
Route::get('/contact', 'ContactController@create')->name('andro.contact');
Route::get('/about', 'AboutController@index')->name('andro.about');

Auth::routes();



/*
 * Dashboard Routes
 */
Route::prefix('/dashboard')->group(function () {

	Route::view('/', 'admin.pages.index')->name('admin.home');

	Route::prefix('/services')->group(function () {
		Route::view('/', 'admin.pages.service.home')->name('admin.services');
		Route::view('/create', 'admin.pages.service.create')->name('admin.service.create');
		Route::view('/edit/{slug}', 'admin.pages.service.edit')->name('admin.service.edit');
	});

	Route::prefix('/articles')->group(function () {
		Route::view('/', 'admin.pages.articles.home')->name('admin.articles');
		Route::view('/create', 'admin.pages.articles.create')->name('admin.article.create');
		Route::view('/edit/{slug}', 'admin.pages.articles.edit')->name('admin.article.edit');
	});

});
