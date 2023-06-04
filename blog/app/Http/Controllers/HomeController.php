<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $farms = Farm::all(); // Retrieve all farms from the table
        $images = Image::all();
    
        return view('home.index', ['farms' => $farms]);
        return view('home.index', ['images' => $images]);
    }

    public function search() {
        $search_text = $_GET['query'];
        $farms = Farm::where('title' , 'LIKE','%'.$search_text.'%')->get();

        return view('home.search',compact('farms'));
    }



}


