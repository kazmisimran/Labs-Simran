<?php

use Illuminate\Support\Facades\Route;
use App\Homemenu;
use App\Carousel;
use App\Logocarousel;
use App\Homeservice;
use App\About;
use App\Testimonial;
use App\Testimonialstitle;
use App\Ready;
use App\Contactform;
use App\Contactinfo;
// use Illuminate\Pagination\Paginator;


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
Route::get('/admin/home', function(){return view ('admin.home.index');});


// //HOME

// Route::get('/' , function () {
//     $homemenu=Homemenu::find(1);
//     $carousels=Carousel::all();
//     $logocarousel=Logocarousel::find(1);
//     $homeservices=Homeservice::paginate(9);
//     $about=About::find(1);
//     $testimonials=Testimonial::all();
//     $testimonialstitle=Testimonialstitle::find(1);
//     $ready=Ready::find(1);
//     $contactforms=Contactform::all();
//     $contactinfo=Contactinfo::find(1);

//     return view('index_home' , compact('homemenu','carousels','logocarousel','homeservices','about','testimonials','testimonialstitle','ready','contactinfo'));
// });

//Home
Route::get('/','WelcomeController@index');

//Homemenu
Route::get('admin/home/homemenu' , 'HomemenuController@edit')->name('homemenu');

Route::post('admin/home/homemenu' , 'HomemenuController@update')->name('homemenu.update');

//Carousels

Route::resource('admin/home/carousel' , 'CarouselController');

//Logocarousel
Route::get('admin/home/logocarousel' , 'LogocarouselController@edit')->name('logocarousel');

Route::post('admin/home/logocarousel' , 'LogocarouselController@update')->name('logocarousel.update');

//Homeservice

Route::resource('admin/home/homeservice' , 'HomeserviceController');



//About

Route::get('admin/home/about' , 'AboutController@edit')->name('about');

Route::post('admin/home/about' , 'AboutController@update')->name('about.update');

//Testimonials

Route::resource('admin/home/testimonial' , 'TestimonialController');

//Testimonials title

Route::get('admin/home/testimonialstitle' , 'TestimonialstitleController@edit')->name('testimonialstitle');

Route::post('admin/home/testimonialstitle' , 'TestimonialstitleController@update')->name('testimonialstitle.update');


//Ready

Route::get('admin/home/ready' , 'ReadyController@edit')->name('ready');

Route::post('admin/home/ready' , 'ReadyController@update')->name('ready.update');

//Contact Form

Route::resource('admin/home/contactform' , 'ContactformController') ;

Route::post('admin/home/contactform/store', 'ContactformController@store')->name('contactform.store');

//Contact Info

Route::get('admin/home/contactinfo' , 'ContactinfoController@edit')->name('contactinfo');

Route::post('admin/home/contactinfo/store', 'ContactinfoController@update')->name('contactinfo.update');

//Team

Route::resource('admin/home/team' , 'TeamController');





