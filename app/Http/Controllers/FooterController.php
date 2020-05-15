<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class FooterController extends Controller
{
    public function edit()
    {
        $footer= Footer::find(1);

        return view('admin.footer.index',compact('footer')) ;

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
        $footer = Footer::find(1);
       
        if(empty($footer)){
            $footer=new Footer();
            $footer->caption=request('caption');
            $footer->save();
            return redirect()->route('admin.index');
        }else{
            $footer->caption=request('caption');
            $footer->save();
            return redirect()->route('admin.index');
        }
    }

}
