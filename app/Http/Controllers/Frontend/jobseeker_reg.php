<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\jobseekr;
use App\Models\User;

class jobseeker_reg extends Controller
{
  public function showJobseekerReg()
  {
    return view('Frontend.jobseeker_reg');
  }
  public function processJobseekerReg(Request $request)
  {
    // dd($request->all());
    $user=User::create([
      'name'=>strtolower($request->input('name')),
      'email'=>strtolower($request->input('email')),
      'password'=>Hash::make($request->input('password')),
    ]);
    $data=([
        'user_id'=>$user->id,
        'gender'=>$request->input('gender'),
        'skill_list'=>$request->input('skill_type'),
        'phone_number'=>$request->input('mobileno')
    ]);
Jobseekr::create($data);
session()->flash('message','Successfully Registration');
return redirect()->back();
  }
}
