<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Court;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function stepOne(Request $request)
    {
        $courts = Court::all();
        $booking = $request->session()->get('booking');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('booking.step1', compact('booking', 'min_date', 'max_date','courts'));
    }
}
