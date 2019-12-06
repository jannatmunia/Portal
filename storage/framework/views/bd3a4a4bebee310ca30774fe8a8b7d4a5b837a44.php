<div class="site-navbar-wrap js-site-navbar bg-white">

    <div class="container">
        <div class="site-navbar bg-light">
            <div class="py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 site-logo"><a href="<?php echo e(url('/index')); ?>"><strong class="font-weight-bold">Women JobPortal</strong> </a></h2>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(url('/AboutUs')); ?>">About Us</a></li>
                                    <li class="has-children">
                                        <a href="<?php echo e(url('/category')); ?>">Category</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="">Full Time</a></li>
                                            <li><a href="">Part Time</a></li>
                                            <li><a href="">Internship</a></li>
                                            <li><a href="">Others</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="<?php echo e(url('/employee')); ?>">For Employees</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="">Category</a></li>
                                            <li><a href="#">Browse Candidates</a></li>
                                            <li><a href="">Post a Job</a></li>
                                            <li class="has-children">
                                                <a href="#">Resume</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">View Resume</a></li>
                                                    <li><a href="#">Invite a jobseeker</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="<?php echo e(url('/jobSeeker')); ?>">Job seeker</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="">Category</a></li>
                                            <li><a href="#">Browse Candidates</a></li>
                                            <li><a href="">Post a Job</a></li>
                                            <li class="has-children">
                                                <a href="#">Resume</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Upload Resume</a></li>
                                                    <li><a href="#">Edit Resume</a></li>
                                                    <li><a href="#">Delete Resume</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact us.html">Contact</a></li>
                                    <li><a href="<?php echo e(url('/login')); ?>"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Log In</span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
