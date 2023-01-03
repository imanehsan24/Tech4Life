<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
use App\Models\Booking;
use App\Models\Court;
use Illuminate\Http\Request;
use Carbon\Carbon;
>>>>>>> 9444d1ebd72d31ddcdf6afd4420f1a653dd40b58

class BookingController extends Controller
{
    public function stepOne(Request $request)
    {
<<<<<<< HEAD
        return view('booking.step1');
=======
        $courts = Court::all();
        $booking = $request->session()->get('booking');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('booking.step1', compact('booking', 'min_date', 'max_date','courts'));
>>>>>>> 9444d1ebd72d31ddcdf6afd4420f1a653dd40b58
    }
}
