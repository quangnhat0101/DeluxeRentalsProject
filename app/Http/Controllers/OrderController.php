<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class OrderController extends Controller
{
    public function BookCar(){
        $carlist = car::all();
        return view ('booking.booking',compact('carlist'));
    }
}
