@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($companies as $company)
    <form action="/{{ $company->id }}" enctype="multipart/form-data" method="post">
    
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-12 offset-10 p-5 bg-light text-dark">
                <div class="row d-flex">
                    <h1>Edit Company</h1>
                    <div id="edit" class="ml-3">
                    <available-button available="{{ $company->available }}"></available-button>
                    </div>

                </div>
                
               
                <!-- Name -->
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Company Name</label>
                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : ''}} " 
                    name="name" value="{{ old('name') ?? $company->name }}" autocomplete="name" autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Description -->
                <div class="form-group row">
                    <label for="description" class="col-md-6 col-form-label">Company Description</label>
                    <textarea id="description" type="text" class="form-control {{ $errors->has('description') ? ' is-invalid' : ''}}  " 
                        name="description" autocomplete="description" autofocus>{{ old('description') ?? $company->description }}</textarea>

                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Adress -->
                <div class="form-group row">
                    <label for="adress" class="col-md-6 col-form-label">Company Adress</label>
                    <input id="adress" type="text" class="form-control {{ $errors->has('adress') ? ' is-invalid' : ''}} " 
                    name="adress" value="{{ old('adress') ?? $company->adress }}" autocomplete="adress" autofocus>

                    @if ($errors->has('adress'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('adress') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Education -->
                <div class="form-group row">
                    <label for="education" class="col-md-4 col-form-label">Education</label>
                    <select class="form-control input-lg" name="education" id="education">
                        <option selected>{{ old('education') ?? $company->education }}</option>
                        @foreach($educations as $education)
                        <option>{{ $education->education }}</option>
                        @endforeach

                    </select>
                    @if ($errors->has('education'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('education') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Level -->
                <div class="form-group row">
                    <label for="level" class="col-md-4 col-form-label">Level</label>
                    <select class="form-control input-lg" name="level" id="level">
                        <option selected>{{ old('level') ?? $company->level }}</option>
                        @foreach($levels as $level)
                        <option>{{ $level->level }}</option>
                        @endforeach

                    </select>
                    @if ($errors->has('level'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('level') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- Grade -->
                <div class="form-group row">
                    <label for="grade" class="col-md-4 col-form-label">Grade</label>
                    <select class="form-control input-lg" name="grade" id="grade">
                        <option selected>{{ old('grade') ?? $company->grade }}</option>
                        @foreach($grades as $grade)
                        <option>{{ $grade->grade }}</option>
                        @endforeach

                    </select>
                    @if ($errors->has('grade'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('grade') }}</strong>
                    </span>
                    @endif
                </div>


                <!-- Kind_OF -->
                <div class="form-group row">
                    <label for="kind_of" class="col-md-6 col-form-label">Kind Of Education</label>
                    <select class="form-control input-lg" name="kind_of" id="kind_of">
                        <option selected>{{ old('kind_of') ?? $company->kind_of }}</option>
                        @foreach($kindOf as $kind)
                        <option>{{ $kind->kind_of }}</option>
                        @endforeach

                    </select>
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
                    <button class="btn btn-primary">Save Company</button>
                </div>

            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection