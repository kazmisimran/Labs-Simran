<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/' , function () {
    return view('index_home');
});

Route::get('/home.html' , function () {
    return view('index_home');
});

Route::get('/services.html', function () {
    return view('index_services');
});

Route::get('/blog.html', function () {
    return view('index_blog');
});

Route::get('/blog-post.html', function () {
    return view('index_blogpost');
});

Route::get('/contact.html', function () {
    return view('index_contact');
});

Route::get('/elements.html', function () {
    return view('index_elements');
});

Route::get('/admin', function(){return view ('admin.index');});