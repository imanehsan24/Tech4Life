<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        $venue=Venue::all();
        return view('venue.index', compact('venue'));
    }

    public function show(Venue $venue)
    {
        return view('venue.show', compact('venue'));
    }
}
