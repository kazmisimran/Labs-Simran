<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicesmenu;
use App\Servicesbanner;

class ServicesController extends Controller
{
    public function index()
    {
       $servicesmenu = Servicesmenu::find(1);
       $servicesbanner = Servicesbanner::find(1);

        return view('index_services',compact('servicesmenu','servicesbanner'));

    }

}
