<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row" style="padding-top: 10px">
    <div class="col-md-12" style="background-color:gray;">
      <div class="d-flex justify-content-between">
        <h4>Post a Job Here</h4>
        <button class="btn btn-warning">Edit</button>
      </div>
      <div class="page-ads box">
        <form class="form-ad" action="<?php echo e(route('postJobProcess')); ?>" method="post" role="form">
          <?php echo csrf_field(); ?>
          <div class="form-group is-empty">
            <div class="row">
              <div class="col-sm-6">
                <label class="control-label">Job Title</label>
                <input type="text" class="form-control" name="job_title" placeholder="Enter Job Title" required>
                <span class="material-input"></span>
              </div>
              <div class="col-sm-6">
                <label class="control-label">Company Name</label>
                <input type="email" class="form-control" name="company_name" placeholder="Enter Company Name" required>
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
          <h4>Company Type</h4>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <select class="form-control" class="optIndustrytype" name="CompanyType">
                  <option value="-1">Select Category</option>
                  <option value="1">Agro based Industry</option>
                  <option value="2">Engineerig</option>
                  <option value="3">Bank/Non-bank</option>
                  <option value="4">Networkin</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="exampleFormControlTextarea3">Job Company Description</label>
                <textarea class="form-control" rows="7" name="CompanyDescription"></textarea>
              </div>
            </div>
          </div>


          <hr>

          <br>
          <div class="row">
            <div class="col-sm-6">
              <label class="control-label">Location</label>
              <input type="text" class="form-control" name="location"  required>
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
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>