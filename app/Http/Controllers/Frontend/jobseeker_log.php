<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class jobseeker_log extends Controller
{
  public function showLogin()
  {
    // dd($request->all());
      return view('Frontend.jobseekerLog');
  }
  public function processLogin(Request $request)
  {
    $data= $request-> only('email','password');
    if(Auth::attempt($data)){
      return redirect()->route('dashboard');

    }else{
    session()->flash('message','Invalid');
    return redirect()->back();
  }
    return $request->all();
}
}
