<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function Homepage(){
        return view('Homepage.homepage');
    }

    public function Contact(){
        return view('Booking.contact');
    }

    public function About(){
        return view('Homepage.about');
    }
}
