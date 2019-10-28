@extends('layouts.app')

@section('content')

<body>
@foreach($companies as $company)
    <div class="row">
        
        <div class="col-8 offset-2 p-5 bg-light text-dark clearfix" >
        <a href="/{{ $company->id }}/edit ">Bewerken</a>
        <img src="{{ $company->companyImage() }}" class="w-10 m-5 img-fluid float-right">
           <div class="">
           <h1 style="font-weight:bold">{{ $company->name }}</h1>
            <h5>{{ $company->description }}</h5>
           </div>
            <h5>{{ $company->adress }}</h5>
            <a href="/detail/{{ $company->id }}">Meer Informatie</a>
            
        </div>
        
        </div>
        <hr>
        @endforeach
</body>
@endsection