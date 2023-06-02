<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Farm;

class RenterController extends Controller
{
    public function index()
    {
        $Farm = Farm::all();
        return view('RenterDashboard.renter', compact('Farm'));
    }
    public function edit($id)
    {
        return view('RenterDashboard.edit');
    }
}
