<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function register()
      {

        return view('auth.register');
      }

      public function store(Request $request)
      {
          $request->validate([
              'name' => 'required|string|max:50',
              'address' => 'required|string|max:255',
              'dob' => 'required|date|date_format:Y-m-d',
              'phone' => 'required|min:10|numeric',
              'email' => 'required|string|email|max:50|unique:users',
              'password' => 'required|string|min:8|confirmed',
              'password_confirmation' => 'required',
          ]);

          User::create([
              'name' => $request->name,
              'email' => $request->email,
              'address' => $request->address,
              'dob' => $request->dob,
              'phone' => $request->phone,
              'password' => Hash::make($request->password),
          ]);

          return redirect('login')->with('status','You have successfully registered. Please login to continue!');
      }
}

