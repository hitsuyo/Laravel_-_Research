<!-- call from folder layouts, file app.balde.php -->
@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
    {!! Form::open(array('route' => 'contact.send'), ['data-toggle'=>'validator', 'role'=>'form']) !!}
        {{ Form::token() }}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','', ['class'=>'form-control', 'placeholder'=>'Enter name'])}}
            @if ($errors->has('name'))
                <small class="form-text invalid-feedback text-danger">{{ $errors->first('name') }}</small>
            @endif
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter email']  )}}
            @if ($errors->has('email'))
                <small class="form-text invalid-feedback text-danger">{{ $errors->first('email') }}</small>
            @endif
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::text('message', '', ['class'=>'form-control', 'placeholder'=>'Enter message'])}}
            @if ($errors->has('message'))
                <small class="form-text invalid-feedback text-danger">{{ $errors->first('message') }}</small>
            @endif
        </div>
        <div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection