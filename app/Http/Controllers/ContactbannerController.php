<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactbanner;

class ContactbannerController extends Controller
{
    public function edit()
    {
        $contactbanner= Contactbanner::find(1);

        return view('admin.contact.contactbanner.index',compact('contactbanner')) ;

    }

    public function update()
    {
        $contactbanner = contactbanner::find(1);
       
        if(empty($contactbanner)){
            $contactbanner=new Contactbanner();
            $contactbanner->title=request('title');
            $contactbanner->bread1=request('bread1');
            $contactbanner->bread2=request('bread2');
            $contactbanner->save();
            return redirect()->route('admin.index');
        }else{    
            $contactbanner->title=request('title');
            $contactbanner->bread1=request('bread1');
            $contactbanner->bread2=request('bread2');
            $contactbanner->save();
            return redirect()->route('admin.index');
        }
    }
}
