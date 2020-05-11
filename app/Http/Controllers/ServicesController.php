<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicesmenu;
use App\Servicesbanner;
use App\Homeservice;
use App\Featurestitle;

class ServicesController extends Controller
{
    public function index()
    {
       $servicesmenu = Servicesmenu::find(1);
       $servicesbanner = Servicesbanner::find(1);
       $homeservices=Homeservice::orderBy('id','desc')->paginate(9);
       $features=Homeservice::orderBy('id', 'desc')->take(6)->get();
       $featureslefts=$features->take(3);
       $featuresrights=$features->take(-3);
       $featurestitle= Featurestitle::find(1);

        return view('index_services',compact('servicesmenu','servicesbanner','homeservices','features' ,'featurestitle','featureslefts','featuresrights'));

    }

}
