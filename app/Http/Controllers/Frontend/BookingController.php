<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Court;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'booking_number' => ['required'],
            'email' => ['required', 'email'],
            'tel_number' => ['required'],
            'book_time' => ['required','date',new DateBetween,new TimeBetween],
            'courts_id' => ['required']
        ]);

        $bookings = Booking::all();
        $request_date = Carbon::parse($request->book_time);
        foreach ($bookings as $booking){
            if ($booking->book_time->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This court is reserved for this date.');
            }
        }

        $booking = Booking::create([
            'name' => $request->name,
            'booking_number' => $request->booking_number,
            'email' => $request->email,
            'tel_number' => $request->tel_number,
            'book_time' => $request->book_time,
            'courts_id' => $request->courts_id,
        ]);

        return view('booking.thankyou', compact('booking'));


    }

    public function show(Booking $booking)
    {
        $userEmail=Auth::user()->email;
        $bookingDetail=Booking::where("email","=","$userEmail")->get();
        return view('booking.show', compact('bookingDetail'));
    }

    public function qrcode(Booking $booking)
    {
        return view('booking.qrcode',compact('booking'));
    }
}
