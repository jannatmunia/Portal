@extends('backend.master')
@section('content')
<div class="row" style="padding-top: 10px">
<div class="card" style="width: 60rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <h6>Job Title:{{$view->job_title}}</h6>
    <h6>Company Name:{{$view->com_name}}</h6>
    <h6>Vacancy:{{$view->vacancy}}</h6>
    <h6>Job Context:{{$view->job_context}}</h6>
    <h6>Job Category:{{$view->job_category}}</h6>
    <h6>Job Type:{{$view->job_type}}</h6>
    <h6>Job Description:{{$view->description}}</h6>
    <h6>Location:{{$view->location}}</h6>
    <h6>salray:{{$view->salary}}</h6>
  </div>
</div>
</div>
@endsection
