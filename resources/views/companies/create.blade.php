
@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">
            <div class="col-12 offset-10 p-5 bg-light text-dark">
                <div class="row">
                    <h1>New Company</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Company Name</label>
                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : ''}} "
                     name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Company Description</label>
                    <textarea id="description" type="text" class="form-control {{ $errors->has('description') ? ' is-invalid' : ''}}  "
                     name="description" value="{{ old('description') }}" autocomplete="description" autofocus></textarea>

                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="adress" class="col-md-4 col-form-label">Company Adress</label>
                    <input id="adress" type="text" class="form-control {{ $errors->has('adress') ? ' is-invalid' : ''}} "
                     name="adress" value="{{ old('adress') }}" autocomplete="adress" autofocus>

                    @if ($errors->has('adress'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('adress') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="education" class="col-md-4 col-form-label">Education</label>
                    <input id="education" type="text" class="form-control {{ $errors->has('education') ? ' is-invalid' : ''}} "
                     name="education" value="{{ old('education') }}" autocomplete="education" autofocus>
                     @foreach($educations ?? '' as $education)
                     <select name="education" id="">
                         <option value="">{{ $education }}</option>
                     </select>
                     @endforeach

                    @if ($errors->has('education'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('education') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="level" class="col-md-4 col-form-label">Level</label>
                    <input id="level" type="text" class="form-control {{ $errors->has('level') ? ' is-invalid' : ''}} "
                     name="level" value="{{ old('level') }}" autocomplete="level" autofocus>

                    @if ($errors->has('level'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('level') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="grade" class="col-md-4 col-form-label">Grade</label>
                    <input id="grade" type="text" class="form-control {{ $errors->has('grade') ? ' is-invalid' : ''}} "
                     name="grade" value="{{ old('grade') }}" autocomplete="grade" autofocus>

                    @if ($errors->has('grade'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('grade') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="kind_of" class="col-md-4 col-form-label">Kind of Education</label>
                    <input id="kind_of" type="text" class="form-control {{ $errors->has('kind_of') ? ' is-invalid' : ''}} "
                     name="kind_of" value="{{ old('kind_of') }}" autocomplete="kind_of" autofocus>

                    @if ($errors->has('kind_of'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('kind_of') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Company Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">
                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Company</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection