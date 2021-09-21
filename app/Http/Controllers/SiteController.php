<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\ContactUs;
use Mail;

class SiteController extends Controller
{
    public function Homepage(){
        return view('Homepage.homepage');
    }

    public function Contact(){
        return view('Homepage.contact');
    }

    public function ContactUsForm(Request $request) {
  
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits_between:10,20',
            'subject'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        ContactUs::create($request->all());

        //  Send mail to admin
        Mail::send('Homepage.MailConfirmation', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('nhatlqts2010024@fpt.edu.vn', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
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
