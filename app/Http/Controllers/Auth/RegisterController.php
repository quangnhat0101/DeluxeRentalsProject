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
              'dob' => 'required|date_format:Y-m-d|before:-16 years',
              'phone' => 'required|digits_between:10,20|numeric',
              'email' => 'required|string|email|max:50|unique:users',
              'password' => 'required|string|min:8|confirmed',
              'password_confirmation' => 'required',
          ],
          [
                'dob.before' => 'You must be older than 16 to register',
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

