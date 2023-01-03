<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Court;
<<<<<<< HEAD
=======
use App\Models\Sport;
>>>>>>> 9444d1ebd72d31ddcdf6afd4420f1a653dd40b58
use Illuminate\Http\Request;

class CourtController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $court=Court::all();
        return view('court.index', compact('court'));
=======
        $courts = Court::all();
        return view('court.index', compact('courts'));
    }

    public function show(Sport $sport)
    {
        return view('sport.show', compact('sport'));
>>>>>>> 9444d1ebd72d31ddcdf6afd4420f1a653dd40b58
    }
}
