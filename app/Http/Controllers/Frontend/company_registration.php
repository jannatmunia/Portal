<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\Models\User;

class company_registration extends Controller
{
  public function  showCompanyRegistration()
  {
    return view('Frontend.companyRegistration');
  }
  public function showProcessCompanyReg(Request $request)
  {


    // dd($request->all());
    // $this->validate($request,[
    //   'email'=>'required',
    //   'password'=> 'required|min:6',
    // ]);
    $this->validate($request,[
    'User_Email'=>'required',
    'User_Password'=>'required:6',
    'CompanyName'=>'required',
    'CompanyLocation'=>'required',
    'CompanyType'=>'required',
    'SearchIndustryType'=>'required',
    'CompanyDescription'=>'required',
    'CompanyWebsiteURL'=>'required',
    'ContactPersonName'=>'required',
    'ContactPersonDesignation'=>'required',
    'ContactPersonEmail'=>'required',
    'ContactPhoneNumber'=>'required',


    ]);
    $user=User::create([
      'name'=>strtolower($request->input('User_Name')),
      'email'=>strtolower($request->input('User_Email')),
      'password'=>Hash::make($request->input('User_Password')),
    ]);
    $data=([
      'user_id'=>$user->id,
      'company_name'=>$request->input('CompanyName'),
      'company_location'=>$request->input('CompanyLocation'),
      'select_category'=>$request->input('CompanyType'),
      'search_industry_type'=>$request->input('SearchIndustryType'),
      'company_description'=>$request->input('CompanyDescription'),
      'company_website_url'=>$request->input('CompanyWebsiteURL'),
      'contact_person_name'=>strtolower($request->input('ContactPersonName')),
      'contact_person_designation'=>$request->input('ContactPersonDesignation'),
      'contact_person_email'=>strtolower($request->input('ContactPersonEmail')),
      'contact_person_phone_number'=>$request->input('ContactPhoneNumber')
      // 'password'=>bcrypt($request->input('password')),
    ]);
    Company::create($data);
    session()->flash('message','Successfully Registration');
    return redirect()->back();
  }
}
