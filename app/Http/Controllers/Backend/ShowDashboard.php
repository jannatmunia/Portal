<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowDashboard extends Controller
{
  public function showDashboard()
  {
    return view('backend.master');
  }
}
