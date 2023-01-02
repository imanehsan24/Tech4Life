<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function stepOne(Request $request)
    {
        return view('booking.step1');
    }
}
