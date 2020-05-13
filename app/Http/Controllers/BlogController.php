<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogbanner;
use App\Newsletter;

class BlogController extends Controller
{
    public function index(){

        $blogbanner = Blogbanner::find(1);
        $newsletters = Newsletter::all();


        return view('index_blog', compact('blogbanner','newsletters'));
    }
}
