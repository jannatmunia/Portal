<div class="site-navbar-wrap js-site-navbar bg-white">
  <div class="container">
    <div class="site-navbar bg-light">
      <div class="py-1">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a><strong class="font-weight-bold">Women JobPortal</strong> </a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href="<?php echo e(route('homepage')); ?>">Home</a></li>
                  <li class="has-children">
                    <a href="<?php echo e(route('frontEmployer')); ?>">Employer</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="<?php echo e(route('employerCategory')); ?>">Category</a></li>
                        <li><a href="<?php echo e(route('emcategoryView')); ?>">Category View</a></li>
                      <li><a href="<?php echo e(route('comLogin')); ?>">Post Job</a>
                      </li>
                      <li class="has-children">
                        <a href="#">Resume</a>
                        <ul class="dropdown">
                          <li><a href="#">View Resume</a></li>
                          <li><a href="#">Invite jobseeker</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="#">Job Seeker</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Category</a></li>
                        <li><a href="<?php echo e(route('jobseekerReg')); ?>">Job apply</a></li>

                    </ul>
                  </li>
                  <li><a href="<?php echo e(route('contactPage')); ?>">Contact Us</a></li>
                  <!--Sign Up-->
                 <?php if(auth()->guard()->guest()): ?>
                  <li><a href="<?php echo e(route('registration')); ?>">Sign Up</a></li>
                  <li><a href="<?php echo e(route('login')); ?>">Log In</a></li>
                  <?php endif; ?>
                  <?php if(auth()->guard()->check()): ?>
                  <li><a href="<?php echo e(route('dashboard')); ?>"></a></li>
                  <li><?php echo e(auth()->user()->name); ?></li>
                  <li><a href="<?php echo e(route('showLogOut')); ?>">Log out</a></li>
                  <?php endif; ?>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
