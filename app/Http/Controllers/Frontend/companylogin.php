<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class companylogin extends Controller
{
  public function comLogin()
  {
    return view('Frontend.companyLogin');
  }
  public function processComLogin(Request $request)
  {
    // dd($request->all());
    $request->validate([
      'email'=> 'required|email',
      'password'=> 'required|min:6',
    ]);
    // dd($request->all());

    $credentials = $request->only('email','password');
    if (Auth::attempt($credentials)) {

      return redirect()->route('dashboard');
    }else {
      session()->flash('message','Invalid');
      return redirect()->back();
    }
    return $request->all();
  }
}
