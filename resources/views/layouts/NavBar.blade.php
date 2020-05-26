<!--NavBar-->
<nav class="navbar fixed-top navbar-expand-md justify-content-around">
    <span []><a class="navbar-brand ml-5" href="{{url('/')}}">Hunter House</a></span>
    <button class="navbar-toggler menu" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon">
            <i class="fa fa-navicon"></i>
        </span>
   </button>
   <div class="collapse navbar-collapse" id="menu">
    <!-- Left Side Of Navbar -->
    <ul class="nav ml-5 sjustify-content-center">
        <li class="nav-item item">
            <a href="{{url('/')}}" class="nav-link active">Welcome</a>
        </li>
        <li class="nav-item item">
            <a href="{{url('/#slideshow')}}" class="nav-link">Menu</a>
        </li>
        <li class="nav-item item">
            <a href="{{url('/#aboutus')}}" class="nav-link">About Us</a>
        </li>
        <li class="nav-item item">
            <a href="{{url('/#contact')}}" class="nav-link">Contact</a>
        </li>
        <li class="nav-item item">
            <a href="{{url('/user/details')}}" class="nav-link">view user</a>
        </li>
        <li class="nav-item item">
            <a href="{{url('/Reservation/viewReservation')}}" class="nav-link">view reservations</a>
        </li>
    </ul>
  
    <!-- Right Side Of Navbar -->
    <ul class="nav ml-5 justify-content-end">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->FirstName }} <span class="caret"></span>
                </a>
  
                <div class="dropdown-menu" role="menu">
                        <a href="/home" class="dropdown-item">
                          My Account
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
  
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div>
            </li>
        @endif
    </ul>
  </div>
  </nav>
  
  
  