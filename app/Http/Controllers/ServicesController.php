<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicesmenu;
use App\Servicesbanner;
use App\Homeservice;

class ServicesController extends Controller
{
    public function index()
    {
       $servicesmenu = Servicesmenu::find(1);
       $servicesbanner = Servicesbanner::find(1);
       $homeservices=Homeservice::orderBy('id','desc')->paginate(9);

        return view('index_services',compact('servicesmenu','servicesbanner','homeservices'));

    }

}
