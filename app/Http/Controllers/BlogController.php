<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogbanner;
use App\Newsletter;
use App\Footer;
class BlogController extends Controller
{
    public function index(){

        $blogbanner = Blogbanner::find(1);
        $newsletters = Newsletter::all();
        $footer = Footer::find(1);


        return view('index_blog', compact('blogbanner','newsletters','footer'));
    }
}
