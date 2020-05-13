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
Route::get('admin/newsletter' , function(){return view('admin.newsletter.index');});





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

//Servicesbanner

Route::get('admin/home/servicesbanner' , 'ServicesbannerController@edit')->name('servicesbanner');

Route::post('admin/home/servicesbanner' , 'ServicesbannerController@update')->name('servicesbanner.update');

//Features title

Route::get('admin/home/featurestitle' , 'FeaturestitleController@edit')->name('featurestitle');

Route::post('admin/home/featurestitle' , 'FeaturestitleController@update')->name('featurestitle.update');

//Contact
Route::get('/contact' , 'ContactController@index')->name('contact');

//Contactbanner

Route::get('admin/contact/contactbanner' , 'ContactbannerController@edit')->name('contactbanner');

Route::post('admin/contact/contactbanner' , 'ContactbannerController@update')->name('contactbanner.update');

//Blog
Route::get('/blog' , 'BlogController@index')->name('blog');

//Blogbanner

Route::get('admin/blog/blogbanner' , 'BlogbannerController@edit')->name('blogbanner');
Route::get('admin/blog/blogbanner' , 'BlogbannerController@update')->name('blogbanner.update');

//Newsletter
Route::post('/newsletter','NewsletterController@store')->name('newsletter.store');
Route::get('/admin/newsletter','NewsletterController@index')->name('newsletter.index');
Route::delete('/admin/newsletter/{id}','NewsletterController@destroy')->name('newsletter.destroy');