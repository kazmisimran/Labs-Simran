<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactform;
class ContactformController extends Controller
{
    
    
    public function index(){

        $contactforms=Contactform::all();

        return view('admin.home.contactform.index', compact('contactforms'));
    }

    public function store(Request $request){


    $contactform= new Contactform();

        $contactform->name=request('name');
        $contactform->email=request('email');
        $contactform->subject=request('subject');
        $contactform->message=request('message');

        $contactform->save();

        return redirect()->back();
    }


    public function destroy($id){

        $contactform= Contactform::find($id);

        $contactform->delete();
         return redirect()->back();
    }
}
