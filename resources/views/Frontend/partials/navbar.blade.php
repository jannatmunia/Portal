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
                  <li><a href="{{route('homepage')}}">Home</a></li>
                  <li class="has-children">
                    <a href="{{route('frontEmployer')}}">Employer</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{route('employerCategory')}}">Category</a></li>
                        <li><a href="{{route('emcategoryView')}}">Category View</a></li>
                      <li><a href="{{route('comLogin')}}">Post Job</a>
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
                        <li><a href="{{route('jobseekerReg')}}">Job apply</a></li>

                    </ul>
                  </li>
                  <li><a href="{{route('contactPage')}}">Contact Us</a></li>
                  <!--Sign Up-->
                 @guest
                  <li><a href="{{route('registration')}}">Sign Up</a></li>
                  <li><a href="{{route('login')}}">Log In</a></li>
                  @endguest
                  @auth()
                  <li><a href="{{route('dashboard')}}"></a></li>
                  <li>{{auth()->user()->name}}</li>
                  <li><a href="{{route('showLogOut')}}">Log out</a></li>
                  @endauth

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
