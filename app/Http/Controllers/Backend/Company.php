<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Company extends Controller
{
  public function showCreateEmployer()
  {
    return view('backend.employerCreate');

  }

  public  function showComProfile(){
    return view('backend.employeer');
  }
  public function showEmployerPost(Request $request)
  {

   // dd($request->all());
    Employer::create([
      'name'=>$request->input('Employer_name'),
      'id'=>$request->input('EmployerId'),

      'email'=>$request->input('Employee_email'),
      'phoneNumber'=>$request->input('employee_phn_no')

    ]);
    return redirect()->back();

  }
}
