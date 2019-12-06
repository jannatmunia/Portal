<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Job;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class PostJobController extends Controller
{
  public function showPostJob()
  {
    $job=Job::with('category')->get();
    $categories=Category::all();
    // dd($categories);
    return view('backend.job',compact('job','categories'));
  }
  public function processPostJob(Request $request)
  {
    // dd($request->all());
    $data=([
      'user_id'=>auth::User()->id,
      'category_id'=>$request->input('category'),
      'job_title'=>$request->input('job_title'),
      'com_name'=>$request->input('c_name'),
      'vacancy'=>$request->input('vacancy'),
      'job_context'=>$request->input('job_context'),
      'job_category'=>$request->input('job_category'),
      'job_type'=>$request->input('job_type'),
      'description'=>$request->input('job_description'),
      'location'=>$request->input('job_location'),
      'salary'=>$request->input('salary')
    ]);
    Job::create($data);
    session()->flash('message',' Registration Successfully!Thanks for Registration.');
    return redirect()->back();
  }
  public function showeditJob($id)
  {
    $edit=Job::where('id',$id)->first();
    return view('backend.edit_job',compact('edit'));
  }
  public function processJobEdit(Request $request,$id )
  {
    Job::where('id',$id)->update([
      'user_id'=>auth::User()->id,
      'job_title'=>$request->input('job_title'),
      'com_name'=>$request->input('c_name'),
      'vacancy'=>$request->input('vacancy'),
      'job_context'=>$request->input('job_context'),
      'job_category'=>$request->input('job_category'),
      'job_type'=>$request->input('job_type'),
      'description'=>$request->input('job_description'),
      'location'=>$request->input('job_location'),
      'salary'=>$request->input('salary')
    ]);
    return redirect('/post_job');
  }
    public function viewJob($id)
    {
      $view=Job::where('id',$id)->first();
      return view('backend.viewJob',compact('view'));
    }
    

}
