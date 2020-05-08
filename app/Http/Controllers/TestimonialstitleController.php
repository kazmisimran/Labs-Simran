<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonialstitle;
use Illuminate\Support\Facades\Storage;

class TestimonialstitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit()
    {
        $testimonialstitle= Testimonialstitle::find(1);

        return view('admin.home.testimonialstitle.index',compact('testimonialstitle')) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $testimonialstitle = Testimonialstitle::find(1);
       
        if(empty($testimonialstitle)){
            $testimonialstitle=new Testimonialstitle();
            $testimonialstitle->title=request('title');
            $testimonialstitle->save();
            return redirect()->route('admin.index');
        }else{
            $testimonialstitle->title=request('title');
            $testimonialstitle->save();
            return redirect()->route('admin.index');
        }
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
