<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:40px;text-align:center;">
      <h4>Employer</h4>
      <p>For any Post Sign Up first.and then log in.For any query contact with us.</p>
      <p>
        <a class="btn btn-outline-success btn-lg" href="<?php echo e(route('comLogin')); ?>">Sign In</a>
      </p>



    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>