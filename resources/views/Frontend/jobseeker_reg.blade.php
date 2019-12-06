@extends('Frontend.master')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
  {{session()->get('message')}}
</div>
@endif
<section id="container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-md-offset-2" style=" background-color: #218838;padding:40px;"><br>
        <h3 class="page-title" style="text-align:center;">Jobseeker Registration Form</h3><br>
        <fieldset>
          <label>Already Registered?</label>
          <div class="field account-sign-in">
            <p>
              <a class="btn btn-primary btn-sm" href="{{route('jobseekerLog')}}">Sign In Now</a>
            </p>
          </div>
        </fieldset>
        <div class="page-ads box">
          <form class="form-ad" action="{{route('processjobseekerReg')}}" method="post" role="form">
            @csrf
            <div class="form-group is-empty">
              <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <label class="control-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                  <span class="material-input"></span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label">Gender</label>
                  <div class="form-group">
                    <select class="form-control" name="gender">
                      <option>Gender</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-12">
                    <label class="control-label">Select your skill from following list</label>
                  <div class="form-group">
                    <select class="form-control" class="optIndustrytype" name="skill_type">
                      <option>Select your skill from following list</option>
                      <option>IT/Telecommunication</option>
                      <option>Engineerig</option>
                      <option>Education/Training</option>
                      <option>Bank/Non-bank</option>
                      <option>Networking</option>
                      <option>NGO</option>
                      <option>Government</option>
                      <option>Design/creativity</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Mobile No</label>
                  <input type="tel" class="form-control" name="mobileno" placeholder="Enter Your Mobile no" required>
                  <span class="material-input"></span>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                  <span class="material-input"></span>
                </div>

                <div class="col-sm-6">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="ABab@123" required>
                  <span class="material-input"></span>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Confirmed Passwrod</label>
                  <input type="password" class="form-control"name="ConfirmPassword" placeholder="ABab@123" required>
                  <span class="material-input"></span>
                </div>
              </div>
            </div>
          </div>
            <div class="form-group">
              <input type="submit" name="submit" class="form-submit" value="Registration Now"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
@endsection
