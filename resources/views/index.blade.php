@extends('layouts.app')

@section('content')

<body>

@foreach($companies as $companies)
@if($companies->available == 1 || $user = Auth::user())
    <div class="row">
        
        <div class="col-8 offset-2 p-5 bg-light text-dark clearfix" >
        @auth
        <a href="/{{ $companies->id }}/edit ">Bewerken</a>
@endauth
        
        <img src="{{ $companies->companyImage() }}" class="w-10 m-5 img-fluid float-right">
           <div>
           <h1 style="font-weight:bold">{{ $companies->name }}</h1>
            <h5>{{ $companies->description }}</h5>
           </div>
            <h5>{{ $companies->adress }}</h5>
            <a href="/detail/{{ $companies->id }}">Meer Informatie</a>
            
        </div>
        
        </div>
        <hr>
        @endif
        @endforeach
        
</body>
@endsection