<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        $sports = Sport::all();
        return view('sport.index', compact('sports'));
    }

    public function show(Sport $sport)
    {
        return view('sport.show', compact('sport'));
    }
}
