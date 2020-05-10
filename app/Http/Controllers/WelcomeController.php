<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Illuminate\Pagination\Paginator;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homemenu=Homemenu::find(1);
        $carousels=Carousel::all();
        $logocarousel=Logocarousel::find(1);
        $homeservices=Homeservice::orderBy('id','desc')->paginate(9);
        $about=About::find(1);
        $testimonials=Testimonial::all();
        $testimonials = Testimonial::orderBy('id', 'desc')->take(6)->get();
        $testimonialstitle=Testimonialstitle::find(1);
        $ready=Ready::find(1);
        $contactforms=Contactform::all();
        $contactinfo=Contactinfo::find(1);

        return view('index_home' , compact('homemenu','carousels','logocarousel','homeservices','about','testimonials','testimonialstitle','ready','contactinfo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
