<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
  public function showLogin()
  {
    return view('Frontend.login');
  }
  public function showProcessLogin(Request $request)
  {
    // dd ($request->all());
    //Validation
    $data = $request->only('email','password');
    if (Auth::attempt($data)) {
      return redirect('dashboard');
    }else {
      session()->flash('message','Invalid');
      return redirect()->back();
    }
  }
  public function showLogOut()
  {
    Auth::logout();
    return redirect()->route('homepage')->with('message','You are now logged out from here');
  }
}
