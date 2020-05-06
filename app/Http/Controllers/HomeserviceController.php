<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeservice;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class HomeserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeservices=Homeservice::all();
        
        return view('admin.home.homeservice.index' , compact('homeservices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.home.homeservice.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homeservice = new Homeservice();
        $homeservice->title = request('title');
        $homeservice->description = request('description');
        $homeservice->icon = request('icon');

        $homeservice->save();
        return redirect()->route('homeservice.index');

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
        $homeservice=Homeservice::find($id);

        return view('admin.home.homeservice.edit', compact('homeservice')) ;

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
        $homeservice=Homeservice::find($id);
        if($homeservice!=null){
            Storage::delete($homeservice->img_path);
            $homeservice->title = request('title');
            $homeservice->description = request('description');
            $homeservice->icon=request('icon');
    
        }

        $homeservice->save();
        return redirect() ->route('homeservice.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeservice=Homeservice::find($id);
        Storage::delete($homeservice);
        $homeservice->delete();
        return redirect() -> back();

    }
}
