<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class SiteController extends Controller
{
    public function Homepage(){
        return view('Homepage.homepage');
    }

    public function Contact(){
        return view('Homepage.contact');
    }

    public function About(){
        return view('Homepage.about');
    }

    public function Manage(){
        $adminid = Auth::id();
        $admincheck = User::where('id',$adminid)->value('email');
        if($admincheck=='admin@admin.com'):
        return view ('Homepage.manage');
        else:
        return redirect()->back();
        endif;
    }

    public function Service(){
        return view('Homepage.service');
    }
}
