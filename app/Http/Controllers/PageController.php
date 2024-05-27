<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Train;

class PageController extends Controller
{
    public function home(){

        $trains = Train::whereDate('departure_time', today())->get();
     
        return view('welcome', compact('trains'));
    }
}
