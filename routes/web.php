<?php

use Illuminate\Support\Facades\Route;
use App\Homemenu;
use App\Carousel;
use App\Logocarousel;

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

//ADMIN

Route::get('/admin', function(){return view ('admin.index');})->name('admin.index');

// //HOME

Route::get('/' , function () {
    $homemenu=Homemenu::find(1);
    $carousels=Carousel::all();
    $logocarousel=Logocarousel::find(1);

    return view('index_home' , compact('homemenu','carousels','logocarousel'));
});

//Homemenu
Route::get('admin/home/homemenu' , 'HomemenuController@edit');

Route::post('admin/home/homemenu' , 'HomemenuController@update')->name('homemenu.update');

//Carousels

Route::resource('admin/home/carousel' , 'CarouselController');

//Logocarousel
Route::get('admin/home/logocarousel' , 'LogocarouselController@edit');

Route::post('admin/home/logocarousel' , 'LogocarouselController@update')->name('logocarousel.update');



