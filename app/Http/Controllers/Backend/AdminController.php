<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function approveJoblist()
  {
    $job=Job::with('category')->get();
    $categories=Category::all();
    return view('backend.approveJob',compact('job','categories'));
  }

  public function approveJob($id)
  {
  $view=Job::where('id',$id)->first();
  return view('backend.viewJob',compact('view'));

    // $approveJob=Job::where('id',$id)->first();
    // if($approveJob)
    // {
    //   $approveJob->approved = 1;
    //   $approveJob->save();
    //   return view('backend.approvejob');
    //
    // }

  }
  Public function rejectJob()
  {

  }




  public function rejectJoblist()
  {
    return view('backend.rejectJob');
  }

}
