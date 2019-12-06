@extends('backend.master')
@section('content')
<div class="container">
  <div class="row" style="padding-top: 10px">
    <div class="col-md-12" style="background-color: #218838;">
      <div class="col-md-12">
        <h4>Post a Job Here</h4>

      </div>
      <div class="page-ads box">
        <form class="form-ad" action="{{route('processJobEdit',$edit->id)}}" method="post" role="form">
          @csrf
          <div class="form-group is-empty">
            <div class="row">
              <div class="col-sm-6">
                <label class="control-label">Job Title</label>
                <input type="text" class="form-control" name="job_title" placeholder="Enter Job Title" value="{{$edit->job_title}}" required>
                <span class="material-input"></span>
              </div>
              <div class="col-sm-6">
                <label class="control-label">Company Name</label>
                <input type="text" class="form-control" name="c_name" placeholder="Enter Company Name" value="{{$edit->c_name}}" required>
                <span class="material-input"></span>
              </div>
            </div>
          </div>
          <hr>
          <h3 style="text-align:center">Job Posting Details Information</h3>
          <div class="form-group is-empty">
            <div class="row">
              <div class="col-sm-4">
                <label class="control-label">Vacancy</label>
                <input type="text" class="form-control" name="vacancy" value="{{$edit->vacancy}}"required>
                <span class="material-input"></span>
              </div>

              <div class="col-sm-6">
                <label class="control-label">Job Context</label>
                <input type="text" class="form-control" name="job_context" placeholder="Type job contex here" value="{{$edit->job_context}}" required>
                <span class="material-input"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label class="control-label">Job Category</label>
              <div class="form-group">
                <select class="form-control" class="optIndustrytype" name="job_category" value="{{$edit->job_category}}">
                  <option>Select Category</option>
                  <option >Agro based Industry</option>
                  <option >Engineerig</option>
                  <option >Bank/Non-bank</option>
                  <option >Networkin</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <label class="control-label">Job Type</label>
              <div class="form-group">
                <select class="form-control" name="job_type" value="{{$edit->job_type}}">
                  <option>Select Category</option>
                  <option>Full Time</option>
                  <option>Part Time</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="exampleFormControlTextarea3">Job Description</label>
                <textarea class="form-control" rows="7" name="job_description" value="{{$edit->job_description}}"></textarea>
              </div>
            </div>
          </div>
          <hr>
          <br>
          <div class="row">
            <div class="col-sm-6">
              <label class="control-label">Location</label>
              <input type="text" class="form-control" name="job_location"  value="{{$edit->job_location}}"required>
              <span class="material-input"></span>
            </div>
            <div class="col-sm-6">
              <label class="control-label">salray</label>
              <input type="text" class="form-control" name="salary" value="{{$edit->salary}}" required>
              <span class="material-input"></span>
            </div>
          </div>
          <hr>
          <div class="form-group">
            <input type="submit" name="submit" class="form-submit" value="Submit here"/>
          </div>
        </div>

      </div>
    </div>
  </div>
  @endsection
