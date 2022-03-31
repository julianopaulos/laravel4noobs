<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function getLandingPage(){
        return view('templates.layout');
    }

    public function getAboutPage(){
        return view('about');
    }
}
