<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Stage Markt</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="navbar">
    
 

    <div class="bg-img">
    @if (Route::has('login'))
                <div class="top-right links text-light bg-dark">
                    @auth
                        <a class="ml-2 my-1 btn btn-light" href="{{ url('/') }}">Home</a>
                        <a class="ml-2 my-1  btn btn-light" href="{{ url('/create') }}">Create</a>
                        <a class="float-right mr-2 my-1 btn btn-light" href="{{ route('logout') }}">Logout</a>

                    @else
                        <a class="ml-2 my-1 btn btn-light" href="{{ route('login') }}">Login</a>

                    @endauth
                </div>
                
            @endif
      <div class="container">
        <div class="container-text">
          <a style="text-decoration:none" href="{{ url('/') }}">
          <h1>Stage Ter Aa</h1>
          <h3>Vind hier de ideale stage!</h3>
          </a>
        </div>
      </div>

    </div>
    <div id="filter">
     
    
    </div>
</div>
    <main class="py-4">
      @yield('content')
    </main>
  
</body>

</html>