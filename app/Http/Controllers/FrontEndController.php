<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /** Return the welcome route  */
    public function welcome () {
        return  view('Frontend.welcome');
    }

    /** Return the about route */
    public function about (){
        return view('Frontend.about');
    }

    /** Show the services */
    public function services () {
        return view('Frontend.services');
    }

      /** Show the services */
    public function contact () {
        return view('Frontend.contact');
    }

}
