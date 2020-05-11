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
use App\Contactmenu;
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




Route::get('/blog.html', function () {
    return view('index_blog');
});

Route::get('/blog-post.html', function () {
    return view('index_blogpost');
});


Route::get('/elements.html', function () {
    return view('index_elements');
});


//ADMIN

Route::get('/admin', function(){return view ('admin.index');})->name('admin.index');
Route::get('/admin/home', function(){return view ('admin.home.index');});
Route::get('/admin/services', function(){return view ('admin.services.index');});
Route::get('/admin/contact' , function(){return view('admin.contact.index');});


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
Route::get('/','WelcomeController@index')->name('home');

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


//Services
Route::get('/services' , 'ServicesController@index')->name('services');

//Servicesmenu

// Route::get('admin/home/servicesmenu' , 'ServicesmenuController@edit')->name('servicesmenu');

// Route::post('admin/home/servicesmenu' , 'ServicesmenuController@update')->name('servicesmenu.update');

//Servicesbanner

Route::get('admin/home/servicesbanner' , 'ServicesbannerController@edit')->name('servicesbanner');

Route::post('admin/home/servicesbanner' , 'ServicesbannerController@update')->name('servicesbanner.update');

//Features title

Route::get('admin/home/featurestitle' , 'FeaturestitleController@edit')->name('featurestitle');

Route::post('admin/home/featurestitle' , 'FeaturestitleController@update')->name('featurestitle.update');

//Contact
Route::get('/contact' , 'ContactController@index')->name('contact');

//Contactmenu

// Route::get('admin/contact/contactmenu' , 'ContactmenuController@edit')->name('contactmenu');

// Route::post('admin/contact/contactmenu' , 'ContactmenuController@update')->name('contactmenu.update');

//Contactbanner

Route::get('admin/contact/contactbanner' , 'ContactbannerController@edit')->name('contactbanner');

Route::post('admin/contact/contactbanner' , 'ContactbannerController@update')->name('contactbanner.update');
