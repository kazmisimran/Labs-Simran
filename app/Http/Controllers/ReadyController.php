<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ready;
use App\Http\Requests\ReadyRequest;

class ReadyController extends Controller
{
    public function edit()
    {
        $ready= Ready::find(1);

        return view('admin.home.ready.index',compact('ready')) ;

    }

    public function update(ReadyRequest $request)
    {
        $ready = Ready::find(1);
       
        if(empty($ready)){
            $ready=new Ready();
            $ready->title=request('title');
            $ready->caption=request('caption');
            $ready->button=request('button');
            $ready->save();
            return redirect()->route('admin.index');
        }else{
            $ready->title=request('title');
            $ready->caption=request('caption');
            $ready->button=request('button');
            $ready->save();
            return redirect()->route('admin.index');
        }
    }
}
