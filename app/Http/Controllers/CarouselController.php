<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels=Carousel::all();
        
        return view('admin.home.carousel.index' , compact('carousels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.home.carousel.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carousel = new Carousel();
        
        $carousel->img_path = request('img') -> store('img');

        $carousel->save();
        return redirect()->route('carousel.index');

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
        $carousel=Carousel::find($id);

        return view('admin.home.carousel.edit', compact('carousel')) ;

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
        $carousel=Carousel::find($id);
        if($carousel!=null){
            Storage::delete($carousel->img_path);
            $carousel->img_path=request('img')->store('img');
        }

        $carousel->save();
        return redirect() ->route('carousel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel=Carousel::find($id);
        Storage::delete($carousel);
        $carousel->delete();
        return redirect() -> back();

    }
}
