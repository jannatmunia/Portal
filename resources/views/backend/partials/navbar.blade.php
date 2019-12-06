<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Women Job Portal</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      @auth()
      <li><a href="{{route('dashboard')}}"></a></li>
      <li style="color:white;">{{auth()->user()->name}}</li>
<li>
  <a href="{{route('showLogOut')}}">Log out</a>
</li>
      @endauth


    </li>
  </ul>
</nav>
