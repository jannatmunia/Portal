@extends('backend.master')
@section('content')

<div class="card" style="width: 60rem;">
  <img class="card-img-top" src="{{url('/Jobseekerphoto/'.$view->photo)}}">
  <div class="card-body">
    <h5 class="card-title">Resume Title</h5>
    <h6>Joseeker name:{{$view->jobseeker_name}}</h6>
    <h6>Joseeker address:{{$view->jobseeker_address}}</h6>
    <h6>Mobile No:{{$view->jobseeker_phn_no}}</h6>
    <h6>Joseeker email:{{$view->jobseeker_email}}</h6>
    <h6>Career Objective:
      <p class="card-text">{{$view->career_objective}}</p>
    </h6>
    <h6>Academic qualification:{{$view->academic_qualification}}</h6>
  </div>
</div>
@endsection
