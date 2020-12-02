@extends('base')

@section('content')
    <h1>Edit User {{ $instructor->user_id }}, {{ $instructor->aoe }}</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::model($instructor, ['url'=>"/instructors/$instructor->id", 'method'=>'patch']) !!}

            @include('instructors._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">
                    Update Instructor
                </button>
            </div>

            {!! Form::close() !!}

        </div>

        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

@endsection