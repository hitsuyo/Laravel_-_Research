<!-- call from folder layouts, file app.balde.php -->
@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    {!! Form::open(array('route' => 'contact.send')) !!}
        {{ Form::token() }}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','', ['class'=>'form-control', 'placeholder'=>'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter email'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::text('message', '', ['class'=>'form-control', 'placeholder'=>'Enter message'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection