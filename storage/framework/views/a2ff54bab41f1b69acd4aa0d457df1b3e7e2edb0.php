<?php $__env->startSection('content'); ?>
<div class="row" style="padding-top: 10px">
<div class="card" style="width: 60rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <h6>Job Title:<?php echo e($view->job_title); ?></h6>
    <h6>Company Name:<?php echo e($view->com_name); ?></h6>
    <h6>Vacancy:<?php echo e($view->vacancy); ?></h6>
    <h6>Job Context:<?php echo e($view->job_context); ?></h6>
    <h6>Job Category:<?php echo e($view->job_category); ?></h6>
    <h6>Job Type:<?php echo e($view->job_type); ?></h6>
    <h6>Job Description:<?php echo e($view->description); ?></h6>
    <h6>Location:<?php echo e($view->location); ?></h6>
    <h6>salray:<?php echo e($view->salary); ?></h6>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>