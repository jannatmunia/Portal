<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    public function showCategory()
    {
      $category=Category::all();
      return view('backend.category',compact('category'));
    }
    public function processCategory(Request $request)
    {
      // dd($request->all());
      $data=([
      'job_category'=>$request->input('job_category')
      ]);
      Category::create($data);
      session()->flash('message','Successfully Registration');
      return redirect()->back();
    }

}
