<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class employer extends Controller
{
  public function showFrontEmployer()
  {
    return view('Frontend.employer');
  }
}
