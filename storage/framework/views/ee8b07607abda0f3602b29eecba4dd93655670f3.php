<?php $__env->startSection('content'); ?>

<div class="card" style="width: 60rem;">
  <img class="card-img-top" src="<?php echo e(url('/Jobseekerphoto/'.$view->photo)); ?>">
  <div class="card-body">
    <h5 class="card-title">Resume Title</h5>
    <h6>Joseeker name:<?php echo e($view->jobseeker_name); ?></h6>
    <h6>Joseeker address:<?php echo e($view->jobseeker_address); ?></h6>
    <h6>Mobile No:<?php echo e($view->jobseeker_phn_no); ?></h6>
    <h6>Joseeker email:<?php echo e($view->jobseeker_email); ?></h6>
    <h6>Career Objective:
      <p class="card-text"><?php echo e($view->career_objective); ?></p>
    </h6>
    <h6>Academic qualification:<?php echo e($view->academic_qualification); ?></h6>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>