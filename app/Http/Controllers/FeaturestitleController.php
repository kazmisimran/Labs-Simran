<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Featurestitle;

class FeaturestitleController extends Controller
{
    public function edit()
    {
        $featurestitle= Featurestitle::find(1);

        return view('admin.services.featurestitle.index',compact('featurestitle')) ;

    }

    public function update()
    {
        $featurestitle = featurestitle::find(1);
       
        if(empty($featurestitle)){
            $featurestitle=new Featurestitle();
            $featurestitle->title=request('title');
            $featurestitle->button=request('button');
            $featurestitle->save();
            return redirect()->route('admin.index');
        }else{    
            $featurestitle->title=request('title');
            $featurestitle->button=request('button');
            $featurestitle->save();
            return redirect()->route('admin.index');
        }
    }
}
