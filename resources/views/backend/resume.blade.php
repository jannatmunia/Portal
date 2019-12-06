@extends('backend.master')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
  {{session()->get('message')}}
</div>
@endif
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
  Resume
</button>
<p style="padding-top: 5px;"></p>
<table class="table table-bordered">
  <thead>

    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Academic qualification</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
    <tr>
      @foreach($resumes as $key=>$data)
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->photo}}</td>
      <td>{{$data->jobseeker_name}}</td>
      <td>{{$data->jobseeker_phn_no}}</td>
      <td>{{$data->academic_qualification}}</td>
      <td>
        <a class="btn btn-outline-success btn-sm" href="{{route('viewResume',$data->id)}}">View</a><hr>
          <a class="btn btn-outline-success btn-sm" href="{{route('editResume',$data->id)}}">Edit</a><hr>
          <a class="btn btn-outline-success btn-sm" href="#">Delete</a><hr>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resume</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        <div class="row" style="padding-top: 10px">
          <div class="col-md-12" style="background-color: #218838;">

            <div class="page-ads box">
              <form class="form-ad" action="{{route('processResume')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group is-empty">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="control-label">Joseeker name</label>
                      <input type="text" class="form-control" name="j_name" placeholder="Enter jobseeker Name" required>
                      <span class="material-input"></span>
                    </div>
                    <div class="col-sm-4">
                      <label class="control-label">Joseeker address</label>
                      <input type="text" class="form-control" name="j_address" placeholder="Enter jobseeker address" required>
                      <span class="material-input"></span>
                    </div>
                    <div class="col-sm-4">
                      <label class="control-label">Mobile No</label>
                      <input type="number" class="form-control" name="phn_no" placeholder="Enter jobseeker mobile no" required>
                      <span class="material-input"></span>
                    </div>
                    <div class="col-sm-4">
                      <label class="control-label">Joseeker email</label>
                      <input type="email" class="form-control" name="j_email" placeholder="Enter jobseeker email" required>
                      <span class="material-input"></span>
                    </div>
                    <div class="col-sm-4">
                      <label class="control-label">Upload picture</label>
                      <input type="file" class="form-control" name="photo" required>
                      <span class="material-input"></span>
                    </div>
                    <hr>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea3">Career Objective</label>
                        <textarea class="form-control" rows="5" name="objective"></textarea>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  <div class="col-sm-4">
                    <label class="control-label">Academic qualification</label>
                    <input type="text" class="form-control" name="qualification" placeholder="Qualification" >
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
      </div>
    </div>
  </div>
@endsection
