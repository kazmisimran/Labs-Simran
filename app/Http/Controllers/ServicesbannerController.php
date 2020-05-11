<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicesbanner;

class ServicesbannerController extends Controller
{
    public function edit()
    {
        $servicesbanner= Servicesbanner::find(1);

        return view('admin.services.servicesbanner.index',compact('servicesbanner')) ;

    }

    public function update()
    {
        $servicesbanner = servicesbanner::find(1);
       
        if(empty($servicesbanner)){
            $servicesbanner=new Servicesbanner();
            $servicesbanner->title=request('title');
            $servicesbanner->bread1=request('bread1');
            $servicesbanner->bread2=request('bread2');
            $servicesbanner->save();
            return redirect()->route('admin.index');
        }else{    
            $servicesbanner->title=request('title');
            $servicesbanner->bread1=request('bread1');
            $servicesbanner->bread2=request('bread2');
            $servicesbanner->save();
            return redirect()->route('admin.index');
        }
    }

}
