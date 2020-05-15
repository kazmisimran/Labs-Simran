<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homemenu;
use App\Contactbanner;
use App\Contactform;
use App\Contactinfo;
use App\Footer;

class ContactController extends Controller
{
    public function index(){

        $homemenu = Homemenu::find(1);
        $contactbanner = Contactbanner::find(1);
        $contactforms=Contactform::all();
        $contactinfo=Contactinfo::find(1);
        $footer=Footer::find(1);
 


        return view('index_contact',compact('homemenu','contactbanner','contactforms','contactinfo','footer'));
    }
}
