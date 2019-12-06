<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class show_catagory extends Controller
{
  //
  public function showCategory()
  {
    return view('Frontend.category');
  }
  
}
