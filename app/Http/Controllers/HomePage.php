<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    function HomePageAction(){

        return view('Home' );
    }
}
