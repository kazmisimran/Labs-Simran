<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicesmenu;

class ServicesmenuController extends Controller
{
    public function edit()
    {
        $servicesmenu= Servicesmenu::find(1);

        return view('admin.services.servicesmenu.index',compact('servicesmenu')) ;

    }

    public function update()
    {
        $servicesmenu = servicesmenu::find(1);
       
        if(empty($servicesmenu)){
            $servicesmenu=new Servicesmenu();
            $servicesmenu->img_path=request('logo')->store('img');
            $servicesmenu->lien1=request('lien1');
            $servicesmenu->lien2=request('lien2');
            $servicesmenu->lien3=request('lien3');
            $servicesmenu->lien4=request('lien4');
            $servicesmenu->save();
            return redirect()->route('admin.index');
        }else{    
            $servicesmenu->img_path=request('logo')->store('img');
            $servicesmenu->lien1=request('lien1');
            $servicesmenu->lien2=request('lien2');
            $servicesmenu->lien3=request('lien3');
            $servicesmenu->lien4=request('lien4');
            $servicesmenu->save();
            return redirect()->route('admin.index');
        }
    }

}
