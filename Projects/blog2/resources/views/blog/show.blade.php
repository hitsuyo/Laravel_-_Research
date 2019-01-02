@extends('layouts.app')

@section('content')
	<a href="/blog2/blog">Go back</a>
	<h1>{{$post->title}}</h1>
	<div>
		{!!$post->content!!}
	</div>
	<small>Written on {{$post->created_at}}</small>
	<hr>

	<a href="{{action('PostsController@edit',$post['id'])}}" class="btn btn-warning">Edit</a>
@endsection