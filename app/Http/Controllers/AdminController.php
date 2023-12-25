<?php

namespace App\Http\Controllers;

use App\Models\Location;

class AdminController extends Controller
{
    public function dashboard()
    {
        $locations = Location::all();

        return view('dashboard', compact('locations'));
    }
}
