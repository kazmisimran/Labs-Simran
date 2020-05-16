<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogbanner;
use App\Http\Requests\BannerRequest;

class BlogbannerController extends Controller
{
    public function edit()
    {
        $blogbanner = Blogbanner::find(1);

        return view('admin.blog.blogbanner.index',compact('blogbanner')) ;

    }

    public function update(BannerRequest $request)
    {
        $blogbanner = Blogbanner::find(1);
       
        if(empty($blogbanner)){
            $blogbanner=new Blogbanner();
            $blogbanner->title=request('title');
            $blogbanner->bread1=request('bread1');
            $blogbanner->bread2=request('bread2');
            $blogbanner->save();
            return redirect()->route('admin.index');
        }else{    
            $blogbanner->title=request('title');
            $blogbanner->bread1=request('bread1');
            $blogbanner->bread2=request('bread2');
            $blogbanner->save();
            return redirect()->route('admin.index');
        }
    }
}
