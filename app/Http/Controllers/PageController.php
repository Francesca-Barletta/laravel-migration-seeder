<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Train;

class PageController extends Controller
{
    public function home(){

        $trains = Train::where('data_di_partenza', Carbon::today())->get();
     
        return view('welcome', compact('trains'));
    }
}
