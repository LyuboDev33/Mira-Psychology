<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /** Return the welcome route  */
    public function welcome () {
        return  view('Frontend.welcome');
    }
}
