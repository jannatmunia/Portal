<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class employer_catagory extends Controller
{
  public  function showEmployerCategory()
  {
    return view ('Frontend.employer_category');
  }
  public  function showEmpCategoryView()
  {
    return view ('Frontend.emCatView');
  }
}
