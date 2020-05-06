<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homemenu;
use Illuminate\Support\Facades\Storage;


class HomemenuController extends Controller
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
        $homemenu= Homemenu::find(1);

        return view('admin.home.homemenu.index',compact('homemenu')) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $homemenu = homemenu::find(1);
       
        if(empty($homemenu)){
            $homemenu=new Homemenu();
            $homemenu->img_path=request('logo')->store('img');
            $homemenu->lien1=request('lien1');
            $homemenu->lien2=request('lien2');
            $homemenu->lien3=request('lien3');
            $homemenu->lien4=request('lien4');
            $homemenu->save();
            return redirect()->route('admin.index');
        }else{    
            $homemenu->img_path=request('logo')->store('img');
            $homemenu->lien1=request('lien1');
            $homemenu->lien2=request('lien2');
            $homemenu->lien3=request('lien3');
            $homemenu->lien4=request('lien4');
            $homemenu->save();
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
