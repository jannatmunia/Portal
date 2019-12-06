<?php $__env->startSection('content'); ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
  Company Profile
</button>
<p style="padding-top: 5px;"></p>
<!-- Modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Company Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo e(route('employerPost')); ?>" method="post" role="form">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
          <div class="form-group">
            <label>Company name</label>
            <input class="form-control"type="text" name="name" placeholder="Enter Company Name ...">
          </div>
          <div class="form-group">
            <label>Company email</label>
            <input class="form-control" type="text" name="email" placeholder="Enter Email...">
          </div>
          <div class="form-group">
            <label>Location</label>
            <input class="form-control" type="text" name="location" placeholder="Enter Location...">
          </div>
          <div class="form-group">
            <label for="employeeEmail">Upload logo</label>
            <input class="form-control" type="file" name="logo">
          </div>
          <div class="form-group">
            <label for="employeePhoneNo">Phone no</label>
            <input class="form-control" name="phone no">
          </div>
        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>