<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    function login(Request $request)
    {
       $credentials = $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:6',
       ]);
      if (Auth::attempt($credentials)) {
       echo "Login Success";
          // Authentication passed...
      }else {
          echo "Login Failed";
      }
    }
}
