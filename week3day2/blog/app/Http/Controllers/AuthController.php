<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register ()
    {
        return view('register');
    }

    public function welcome (Request $r)
    {
        $name = $r->input('fname')." ".$r->input('lname');
        return view('welcome', ['name' => $name]);
    }

}
