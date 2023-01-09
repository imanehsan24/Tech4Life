<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingStoreRequest;
use App\Models\Booking;
use App\Models\Court;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.booking.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courts = Court::where('status','available')->get();
        return view('admin.booking.create',compact('courts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingStoreRequest $request)
    {
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

        return to_route('admin.booking.index')->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $courts = Court::where('status','available')->get();
        return view('admin.booking.edit', compact('booking', 'courts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'name' => 'required',
            'booking_number' => 'required',
            'email' => 'required',
            'tel_number' => 'required',
            'book_time' => 'required',
            'courts_id' => 'required'
        ]);

        $booking->update([
            'name' => $request->name,
            'booking_number' => $request->booking_number,
            'email' => $request->email,
            'tel_number' => $request->tel_number,
            'book_time' => $request->book_time,
            'courts_id' => $request->courts_id
        ]);

        return to_route('admin.booking.index')->with('success', 'Booking updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return to_route('admin.booking.index')->with('danger', 'Booking deleted successfully.');
    }
}
