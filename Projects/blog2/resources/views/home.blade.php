@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <div id="app">
    	<hello></hello>
	</div>
@endsection



@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection