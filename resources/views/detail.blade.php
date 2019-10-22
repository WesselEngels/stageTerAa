@extends('layouts.app')

@section('content')
<body>
<div class="row">
        
<div class="col-8 offset-2 p-5 bg-light text-dark clearfix" >
            
        @foreach($companies as $company)
        <img src="/storage/{{ $company->image }}" class="mw-5 m-5 img-fluid float-right">
        <h1 style="font-weight:bold">{{ $company->name }}</h1>
            <h5>{{ $company->description }}</h5>
            <table class="table-borderless" style="font-size: 18px;">
                <tr>
                    <th>Adres:</th>
                    <td class="col-md-6">{{ $company->adress }}</td>
                </tr>
                <tr>
                    <th>Opleiding:</th>
                    <td class="col-md-6">{{ $company->education }}</td>
                </tr>
                <tr>
                    <th>Niveau:</th>
                    <td class="col-md-6">{{ $company->level }}</td>
                </tr>
                <tr>
                    <th>Leerjaar:</th>
                    <td class="col-md-6">{{ $company->grade }}</td>
                </tr>
                <tr>
                    <th>Soort:</th>
                    <td class="col-md-6">{{ $company->kind_of }}</td>
                </tr>
            </table>
    
@endforeach
        </div>
        
        </div>
</body>
@endsection