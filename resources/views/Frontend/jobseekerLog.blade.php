@extends('Frontend.master')
@section('content')
<div class="main">
  <section class="login">
    <div class="container">
      <div class="row">
    <div class="col-md-6">
        <div class="login-content">
          <form action="{{route('processJobseekerlogin')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <!-- @if ($errors->any())
            <div class="alert alert-danger">
            @if($errors->count()==1)
            {{$errors->first()}}
            @else
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif
        </div>
        @endif -->
        <div class="form-group is-empty">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-md-offset-2" style=" background-color: #218838;padding:40px;"><br>
              <h3 class="page-title" style="text-align:center;">Job Seeker Log In</h3><br>
              <div class="col-md-12 col-sm-12">
                <label class="control-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required >
                <span class="material-input"></span>
              </div>
              <div class="col-md-12 col-sm-12">
                <label class="control-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="ABab@123" required>
                <span class="material-input"></span>
              </div>
              <br>
              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <input type="submit" name="submit" id="submit" class="form-submit" value="Log In Here" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="col-md-6"style="background-color: white;padding:40px;">
<h1>Apply For Job</h1>
<fieldset>
<label>Don't have account please Sign Up</label>
<div class="field account-sign-in">
  <p>
    <a class="btn btn-outline-success" href="{{route('jobseekerReg')}}">Sign In</a>
  </p>
</div>
</fieldset>
</div>

  </div>
</div>
</section>
</div>
@endsection
