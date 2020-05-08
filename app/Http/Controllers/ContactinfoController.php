<?php

namespace App\Http\Controllers;
use App\Contactinfo;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ContactinfoController extends Controller
{
    public function edit()
    {
        $contactinfo= Contactinfo::find(1);

        return view('admin.home.contactinfo.index',compact('contactinfo')) ;

    }

    public function update()
    {
        $contactinfo= Contactinfo::find(1);
        if(empty($contactinfo)){
            $contactinfo=new Contactinfo();
            $contactinfo->title=request('title');
            $contactinfo->text=request('text');
            $contactinfo->address=request('address');
            $contactinfo->phone=request('phone');
            $contactinfo->email=request('email');
            
            $contactinfo->save();
            return redirect()->route('admin.index');
        }else{

            $contactinfo->title=request('title');
            $contactinfo->text=request('text');
            $contactinfo->address=request('address');
            $contactinfo->phone=request('phone');
            $contactinfo->email=request('email');
           
            $contactinfo->save();
            return redirect()->route('admin.index');
        }
    }


}
