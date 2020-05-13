<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homemenu;
use App\Servicesbanner;
use App\Homeservice;
use App\Featurestitle;
use App\Contactform;
use App\Contactinfo;
use App\Newsletter;

class ServicesController extends Controller
{
    public function index()
    {
        $homemenu = Homemenu::find(1);
       $servicesbanner = Servicesbanner::find(1);
       $homeservices=Homeservice::orderBy('id','desc')->paginate(9);
       $features=Homeservice::orderBy('id', 'desc')->take(6)->get();
       $featureslefts=$features->take(3);
       $featuresrights=$features->take(-3);
       $featurestitle= Featurestitle::find(1);
       $contactforms=Contactform::all();
       $contactinfo=Contactinfo::find(1);
       $newsletters=Newsletter::all();



        return view('index_services',compact('homemenu','servicesbanner','homeservices','features' ,'featurestitle','featureslefts','featuresrights','contactforms','contactinfo','newsletters'));

    }

}
