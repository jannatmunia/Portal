<?php $__env->startSection('content'); ?>
<!--Home page-->
<div class="site-blocks-cover overlay" style="background-image:url('images/Wsp_background.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12" data-aos="fade">
        <h1>Find Job</h1>
        <form action="#">
          <div class="row mb-3">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <input type="text" class="mr-3 form-control border-0 px-4" placeholder="Job title">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="input-wrap">
                    <span class="icon icon-room"></span>
                    <input type="text" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="Division" onFocus="geolocate()">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <input type="submit" class="btn btn-search btn-primary btn-block" value="Submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

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