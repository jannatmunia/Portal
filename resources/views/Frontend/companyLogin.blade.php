@extends('Frontend.master')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
  {{session()->get('message')}}
</div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- BootstrapCDN start-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!--BootstrapCDN end-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Company Log In</title>
</head>
<body>
  <div class="main">
    <section class="login">
      <div class="container">
        <div class="row">
      <div class="col-md-6">
          <div class="login-content">
            <form action="{{route('comloginProcess')}}" method="post" role="form" enctype="multipart/form-data">
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
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="form-group is-empty">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-md-offset-2" style=" background-color: #218838;padding:40px;"><br>
                <h3 class="page-title" style="text-align:center;">Company Log In</h3><br>
                <div class="col-md-12 col-sm-12">
                  <label class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email"  >
                  <span class="material-input"></span>
                </div>
                <div class="col-md-12 col-sm-12">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="ABab@123" >
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
<h1>Post a Job</h1>
<fieldset>
  <label>Don't have account please Sign Up</label>
  <div class="field account-sign-in">
    <p>
      <a class="btn btn-outline-success" href="{{route('companyReg')}}">Sign In</a>
    </p>
  </div>
</fieldset>
</div>

    </div>
</div>
</section>
</div>

<script src="js\signUp\jquery.min.js" type="e3f031f9b63129d575ae52eb-text/javascript"></script>
<script src="js\signUp\main.js" type="e3f031f9b63129d575ae52eb-text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="e3f031f9b63129d575ae52eb-text/javascript"></script>
<script type="e3f031f9b63129d575ae52eb-text/javascript">
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-23581568-13');
</script>
<script src="js\signUp\rocket-loader.min.js" data-cf-settings="e3f031f9b63129d575ae52eb-|49" defer=""></script></body>
</html>
@endsection
