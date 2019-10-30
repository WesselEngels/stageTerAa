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
    
  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="ml-2" href="{{ url('/') }}">Home</a>
                        <a class="ml-2" href="{{ url('/create') }}">Create</a>
                        <a class="float-right mr-2" href="{{ route('logout') }}">Logout</a>

                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @endauth
                </div>
                
            @endif

    <div class="bg-img">
      <div class="container">
        <div class="container-text">
          <h1>Stage Ter Aa</h1>
          <h3>Vind hier de ideale stage!</h3>
        </div>
      </div>

    </div>
    <div id="filter"> 
    <stage-filter></stage-filter>
    </div>
</div>
    <main class="py-4">
      @yield('content')
    </main>
  
</body>

</html>