<?php $__env->startSection('content'); ?>
<?php $__env->startSection('content'); ?>
<?php if(session()->has('message')): ?>
<div class="alert alert-success">
  <?php echo e(session()->get('message')); ?>

</div>
<?php endif; ?>
<section id="container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-md-offset-2" style=" background-color: #218838;padding:40px;"><br>
        <h3 class="page-title" style="text-align:center;">Company Registration Form</h3><br>
        <fieldset>
          <label>Have an Account</label>
          <div class="field account-sign-in">
            <p>
              <a class="btn btn-primary btn-sm" href="<?php echo e(route('comLogin')); ?>">Sign In</a>
            </p>
          </div>
        </fieldset>
        <div class="page-ads box">
          <form class="form-ad" action="<?php echo e(route('companyRegProcess')); ?>" method="post" role="form">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
      <div class="alert alert-danger">
          <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
  <?php endif; ?>
            <div class="form-group is-empty">
              <div class="row">
                <div class="col-sm-6">
                  <label class="control-label">User Name</label>
                  <input type="text" class="form-control" name="User_Name" placeholder="Enter User Name">
                  <span class="material-input"></span>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Email</label>
                  <input type="email" class="form-control" name="User_Email" placeholder="Enter Email">
                  <span class="material-input"></span>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" name="User_Password" placeholder="ABab@123">
                  <span class="material-input"></span>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Confirmed Passwrod</label>
                  <input type="password" class="form-control"name="ConfirmUserPassword" placeholder="ABab@123">
                  <span class="material-input"></span>
                </div>
              </div>
            </div>
            <hr>
            <h3 style="text-align:center">Company Details Information</h3>
            <div class="form-group is-empty">
              <div class="row">
                <div class="col-sm-6">
                  <label class="control-label">Company Name</label>
                  <input type="text" class="form-control" name="CompanyName" placeholder="Company Name">
                  <span class="material-input"></span>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">location</label>
                  <input type="text" class="form-control" name="CompanyLocation" placeholder="e.g:Dhaka">
                  <span class="material-input"></span>
                </div>
              </div>
            </div>
            <h4>Company Type</h4>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control" class="optIndustrytype" name="CompanyType">
                    <option>Select Category</option>
                    <option>IT</option>
                    <option>Engineerig</option>
                    <option>Bank/Non-bank</option>
                    <option>Networking</option>
                    <option>NGO</option>
                    <option>Government</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="SearchIndustryType" placeholder="Search Industry Type">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="exampleFormControlTextarea3">Company Description</label>
                  <textarea class="form-control" rows="7" name="CompanyDescription"></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <label class="control-label">Company's Website URL</label>
                <input type="text" class="form-control" name="CompanyWebsiteURL">
                <span class="material-input"></span>
              </div>
            </div>
            <hr>
            <h3>Contact</h3>
            <div class="row">
              <div class="col-sm-6">
                <label class="control-label">Contact's Person Name</label>
                <input type="text" class="form-control"  name="ContactPersonName" placeholder="Type Contact's Person Name">
                <span class="material-input"></span>
              </div>
              <div class="col-sm-6">
                <label class="control-label">Contact's Person Designation</label>
                <input type="text" class="form-control" name="ContactPersonDesignation"  placeholder="Type Contact's Person Designation">
                <span class="material-input"></span>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-6">
                <label class="control-label">Contact's Person Email</label>
                <input type="text" class="form-control" name="ContactPersonEmail" placeholder="Type Contact's Person Email">
                <span class="material-input"></span>
              </div>
              <div class="col-sm-6">
                <label class="control-label">Contact's Person Phone Number</label>
                <input type="text" class="form-control" name="ContactPhoneNumber" placeholder="Type Contact's Person Phone Number">
                <span class="material-input"></span>
              </div>
            </div>
            <hr>
            <div class="form-group">
              <input type="submit" name="submit" class="form-submit" value="Registration Now"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>