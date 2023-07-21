<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        $trains = Train::all();
        
        return view('home', compact('trains'));
    }
}
