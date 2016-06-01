@extends('layouts.auth')

@section('title', 'Reset Password')

@section('heading', 'Enter email to reset your password.')

@section('content')
    {!! Form::open() !!}
    {!! Form::token() !!}
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password confirmation') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}



    {!! Form::close() !!}
@endsection