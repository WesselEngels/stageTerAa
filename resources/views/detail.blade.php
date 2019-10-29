@extends('layouts.app')

@section('content')

<body>
    <div class="row">
    @foreach($companies as $company)
        <div class="col-8 offset-2 p-5 bg-light text-dark clearfix">
        @auth
        <a href="/{{ $company->id }}/edit ">Bewerken</a>
    @endauth
           
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

            


            <form action="{{ url('/contact') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <input type="hidden" name="companyName" value="{{ $company->name }}">
                <input type="hidden" name="companyAdress" value="{{ $company->adress }}">
                <div class="form-group">
                    <label for="">Motivatie</label>
                    <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @endforeach
    </div>
</body>

@endsection