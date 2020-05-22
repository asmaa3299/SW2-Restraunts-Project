<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Links -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
</head>
<body>
    @include('layouts.NavBar')
    @yield('content')
    <div class="container" >
        <div class="row">
          <div class="col-12">
            @include('layouts.errors')
          </div>
        </div>
      </div>
    @include('layouts.Footer')
</body>

<!-- Scripts -->
<script src="/js/jquery.min.js"></script>
<<<<<<< HEAD
=======
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
>>>>>>> Make-Reservation-Method---Asmaa-Mahmoud
<script src="/js/bootstrap.min.js"></script>
<script src="/js/fontawesome.js"></script>
</html>