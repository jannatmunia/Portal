<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobseekr;
use App\Models\User;
use App\Models\Resume;
use Illuminate\Support\Facades\Auth;
class ResumeController extends Controller
{
  public function showResume()
  {
    $resumes=Resume::all();
    return view('backend.resume',compact('resumes'));
  }
  public function processResume(Request $request)
  {
    // dd($request->all());
    $img='';
    if($request->hasfile('photo'))
    {
      $photo=$request->file('photo');
      $img=uniqid('pImage_',true).str_random(10).'.'.$photo->getClientOriginalName();
      $photo->storeAs('Jobseekerphoto',$img);
    }
    $data=([
      'user_id'=>auth::user()->id,
      'jobseeker_name'=>$request->input('j_name'),
      'jobseeker_address'=>$request->input('j_address'),
      'jobseeker_phn_no'=>$request->input('phn_no'),
      'jobseeker_email'=>$request->input('j_email'),
      'photo'=>$img,
      'career_objective'=>$request->input('objective'),
      'academic_qualification'=>$request->input('qualification')
    ]);
    Resume::create($data);
    session()->flash('message','Successfully upload Resume');
    return redirect()->back();
  }
  public function viewResume($id)
  {
    $view=Resume::where('id',$id)->first();
    return View('backend.viewResume',compact('view'));
  }

  public function editResume($id)
  {
    $edit=Resume::where('id',$id)->first();
    return view('backend.update_resume',compact('edit'));
  }
  public function processEditResume(Request $request, $id)
  {
    $img='';
    if($request->hasfile('photo'))
    {
      $photo=$request->file('photo');
      $img=uniqid('pImage_',true).str_random(10).'.'.$photo->getClientOriginalName();
      $photo->storeAs('jobseeker_img',$img);
    }
    Resume::where('id',$id)->update([
      'user_id'=>auth::user()->id,
      'jobseeker_name'=>$request->input('j_name'),
      'jobseeker_address'=>$request->input('j_address'),
      'jobseeker_phn_no'=>$request->input('phn_no'),
      'jobseeker_email'=>$request->input('j_email'),
      'photo'=>$img,
      'career_objective'=>$request->input('objective'),
      'academic_qualification'=>$request->input('qualification')
    ]);
    $resumes=Resume::all();
    return view('backend.resume',compact('resumes'));
  }
}
