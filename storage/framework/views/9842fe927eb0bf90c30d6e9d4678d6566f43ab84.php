
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
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="css/signUp/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="css/signUp/style.css">
</head>
<body>
  <div class="main">
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <form action="<?php echo e(route('registrationProcess')); ?>" method="post" role="form">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
              <?php if($errors->count()==1): ?>
              <?php echo e($errors->first()); ?>

              <?php else: ?>
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <h2 class="form-title">Member Sign Up Form</h2>
            <div class="form-group">
              <input type="text" class="form-input" name="name" placeholder="Enter Your Name" />
            </div>
            <div class="form-group">
              <input type="email" class="form-input" name="email" placeholder="Your Your Email" />
            </div>
            <div class="form-group">
              <input type="password" class="form-input" name="password" placeholder="Password" />
              <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
              <input type="password" class="form-input" name="confirmed_passwrod" placeholder="Confirm password" />
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="form-submit" value="Sign up"/>
            </div>
          </form>
          <p class="loginhere">
            Have already an account ? <a href="<?php echo e(route('login')); ?>">Login here</a>
          </p>
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
