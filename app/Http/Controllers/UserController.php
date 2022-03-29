<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getMeProfile(){
        $username = "juliano";
        return view('users', compact('username'));
    }

    public function getProfile(string $username){
        return view('users', compact('username'));
    }
}
