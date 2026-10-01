<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    function index(){
        return view('index' , ['pagename' => 'Home']);
    }
    function About(){
        return view('About' ,['pagename' => 'About']);
    }
    function Contact(){
      return view('Contact' , ['pagename' => 'Contact']);
    }
}
