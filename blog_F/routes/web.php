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


Route::get('/', function () {
    return view('website.index');
});


Route::get('/about', function () {
    return view('website.about');
});


Route::get('/blog', function () {
    return view('website.blog');
});


Route::get('/grid', function () {
    return view('website.grid');
});

Route::get('/masonry', function () {
    return view('website.masonry');
});

Route::get('/post', function () {
    return view('website.single-post');
});




///admin panel routes


Route::get('/test', function () {
    return view('layouts.admin');
});


Route::get('/admin_dash', function () {
    return view('admin.dashboard.index');
});