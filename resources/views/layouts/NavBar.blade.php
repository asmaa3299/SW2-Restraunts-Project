<!--NavBar-->
<nav class="navbar fixed-top navbar-expand-md justify-content-around">
    <span class="navbar-brand ml-5">Hunter House</span>
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
            <a href="#" class="nav-link">Menu</a>
        </li>
        <li class="nav-item item">
            <a href="#" class="nav-link">Reservations</a>
        </li>
        <li class="nav-item item">
            <a href="#" class="nav-link">Contact</a>
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
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
  
                <div class="dropdown-menu" role="menu">
                        <a href="/dashboard" class="dropdown-item">
                          Dashboard
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
  
  
  