<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Court;
use App\Models\Sport;
use Illuminate\Http\Request;

class CourtController extends Controller
{
    public function index()
    {
        $courts = Court::all();
        return view('court.index', compact('courts'));
    }

    public function show(Sport $sport)
    {
        return view('sport.show', compact('sport'));
    }
}
