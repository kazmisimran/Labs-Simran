<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::all();
        
        return view('admin.home.testimonial.index' , compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.home.testimonial.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->text = request('text');
        $testimonial->name = request('name');
        $testimonial->position=request('position');
        $testimonial->img_path = request('img') -> store('img');

        $testimonial->save();
        return redirect()->route('testimonial.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $reversed = $testimonials->reverse();
        return view('index' , compact('testimonials'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::find($id);

        return view('admin.home.testimonial.edit', compact('testimonial')) ;

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
        $testimonial=Testimonial::find($id);
        if($testimonial!=null){
            Storage::delete($testimonial->img_path);
            $testimonial->img_path=request('img')->store('img');
            $testimonial->text = request('text');
            $testimonial->position=request('position');
            $testimonial->name=request('name');
    
        }

        $testimonial->save();
        return redirect() ->route('testimonial.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);
        Storage::delete($testimonial);
        $testimonial->delete();
        return redirect() -> back();

    }
}
