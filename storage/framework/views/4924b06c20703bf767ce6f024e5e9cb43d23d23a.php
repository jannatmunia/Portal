<?php $__env->startSection('content'); ?>
<div class="main">
  <section class="login">
    <div class="container">
      <div class="row">
    <div class="col-md-6">
        <div class="login-content">
          <form action="<?php echo e(route('processJobseekerlogin')); ?>" method="post" role="form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <!-- <?php if($errors->any()): ?>
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
        <?php endif; ?> -->
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
    <a class="btn btn-outline-success" href="<?php echo e(route('jobseekerReg')); ?>">Sign In</a>
  </p>
</div>
</fieldset>
</div>

  </div>
</div>
</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>