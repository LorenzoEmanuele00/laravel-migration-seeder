<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $today_trains = Train::where('departure_time', '>=', now())->orderBy('departure_time')->get();
        return view('home', compact('today_trains'));
    }
}
