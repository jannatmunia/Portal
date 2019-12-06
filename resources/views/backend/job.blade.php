@extends('backend.master')
@section('content')
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
  Post Job
</button>
<p style="padding-top: 5px;"></p>
<div class="row" style="padding-top: 10px">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th  scope="col">Serial No</th>
        <th scope="col">Title</th>
        <th scope="col">Company</th>
        <th scope="col">Category</th>
        <th scope="col">Type</th>
        <th scope="col">Location</th>
        <th scope="col">salary</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($job as $key=>$data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->job_title}}</td>
        <td>{{$data->com_name}}</td>
        <td>{{$data->category->job_category}}</td>
        <td>{{$data->job_type}}</td>
        <td>{{$data->location}}</td>
        <td>{{$data->salary}}</td>
        <td>
          <a class="btn btn-outline-success btn-sm" href="{{route('viewJob',$data->id)}}">View</a>
          <a class="btn btn-outline-success btn-sm" href="{{route('editJob',$data->id)}}">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!-- Modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post a Job Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        <div class="row" style="padding-top: 10px">
          <div class="col-md-12" style="background-color: #218838;">
            <div class="col-md-12">
              <h4>Post a Job Here</h4>
            </div>
            <div class="page-ads box">
              <form class="form-ad" action="{{route('postJobProcess')}}" method="post" role="form">
                @csrf
                <div class="form-group is-empty">
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="control-label">Job Title</label>
                      <input type="text" class="form-control" name="job_title" placeholder="Enter Job Title" required>
                      <span class="material-input"></span>
                    </div>
                    <div class="col-sm-6">
                      <label class="control-label">Company Name</label>
                      <input type="text" class="form-control" name="c_name" placeholder="Enter Company Name" required>
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
                      <input type="text" class="form-control" name="vacancy"required>
                      <span class="material-input"></span>
                    </div>

                    <div class="col-sm-6">
                      <label class="control-label">Job Context</label>
                      <input type="text" class="form-control" name="job_context" placeholder="Type job contex here" required>
                      <span class="material-input"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Job Category</label>

                      <select class="form-control" class="optIndustrytype" name="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->job_category}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label">Job Type</label>
                    <div class="form-group">
                      <select class="form-control" name="job_type">
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
                      <textarea class="form-control" rows="7" name="job_description"></textarea>
                    </div>
                  </div>
                </div>
                <hr>
                <br>
                <div class="row">
                  <div class="col-sm-6">
                    <label class="control-label">Location</label>
                    <input type="text" class="form-control" name="job_location"  required>
                    <span class="material-input"></span>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label">salray</label>
                    <input type="text" class="form-control" name="salary"  required>
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
      </div>
    </div>
  </div>
  @endsection
