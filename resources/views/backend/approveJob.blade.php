@extends('backend.master')
@section('content')
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
        <th scope="col">Status</th>

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

          <a class="btn btn-success btn-sm" href="{{route('approveJob',$data->id)}}" >Approve</a><hr>

        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
