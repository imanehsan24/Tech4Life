<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactus');
    }
}
