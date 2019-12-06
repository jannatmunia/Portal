@extends('backend.master')
@section('content')
<div class="container">
  <div class="row" style="padding-top: 10px">
    <div class="col-md-12" style="background-color: #218838;">
      <div class="page-ads box">
        <form class="form-ad" action="{{route('processEditResume',$edit->id)}}" method="post" role="form" enctype="multipart/form-data">
          @csrf
          <div class="form-group is-empty">
            <div class="row">
              <div class="col-sm-4">
                <label class="control-label">Joseeker name</label>
                <input type="text" class="form-control" name="j_name" placeholder="Enter jobseeker Name" value="{{$edit->j_name}}" required>
                <span class="material-input"></span>
              </div>
              <div class="col-sm-4">
                <label class="control-label">Joseeker address</label>
                <input type="text" class="form-control" name="j_address" placeholder="Enter jobseeker address"  value="{{$edit->j_address}}" required>
                <span class="material-input"></span>
              </div>
              <div class="col-sm-4">
                <label class="control-label">Mobile No</label>
                <input type="number" class="form-control" name="phn_no" placeholder="Enter jobseeker mobile no" value="{{$edit->phn_no}}" required>
                <span class="material-input"></span>
              </div>
              <div class="col-sm-4">
                <label class="control-label">Joseeker email</label>
                <input type="email" class="form-control" name="j_email" placeholder="Enter jobseeker email" value="{{$edit->j_email}}" required>
                <span class="material-input"></span>
              </div>
              <div class="col-sm-4">
                <label class="control-label">Upload picture</label>
                <input type="file" class="form-control" name="photo"required>
                <span class="material-input"></span>
              </div>
              <hr>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="exampleFormControlTextarea3">Career Objective</label>
                  <textarea class="form-control" rows="5" name="objective" value="{{$edit->objective}}"></textarea>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <label class="control-label">Academic qualification</label>
                <input type="text" class="form-control" name="qualification" value="{{$edit->qualification}}"placeholder="Qualification" >
                <span class="material-input"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="form-submit" value="Submit here"/>
        </div>
      </div>
    </div>
  </div>
  @endsection
