<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class registration extends Controller
{
  public function showRegistration()
  {
    return view('Frontend.sign');
  }
  public function showProcessReg(Request $request)
  {
    //Validation
    $this->validate($request,[
      'email'=>'required|email',
      'password'=>'required|min:6',
    ]);
    // dd($request->all());
    User::create([
      'name'=>$request->input('name'),
      'id'=>$request->input('id'),
      'email'=>$request->input('email'),
      //'password'=>bcrypt($request->input('password')),
      'password'=>Hash::make($request->input('password')),
      'confirmed_passwrod'=>Hash::make($request->input('confirmed_passwrod'))

    ]);
    session()->flash('message','Registration Done Successfully');
    return redirect()->back();
  }
}
