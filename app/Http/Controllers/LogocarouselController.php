<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logocarousel;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\LogocarouselRequest;


class LogocarouselController extends Controller
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
        $logocarousel= Logocarousel::find(1);

        return view('admin.home.logocarousel.index',compact('logocarousel')) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LogocarouselRequest $request)
    {
        $logocarousel = logocarousel::find(1);
       
        if(empty($logocarousel)){
            $logocarousel=new Logocarousel();
            $logocarousel->img_path=request('logo')->store('img');
            $logocarousel->caption=request('caption');
            $logocarousel->save();
            return redirect()->route('admin.index');
        }else{    
            $logocarousel->img_path=request('logo')->store('img');
            $logocarousel->caption=request('caption');
            $logocarousel->save();
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
