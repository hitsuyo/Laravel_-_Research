@extends('layouts.app')

@section('content')
	<div class="row">
		<h1 class="col-12 col-sm-6">Blog</h1>
		<!-- <a href="http://localhost/blog2/blog_crud">Manage posts</a> -->
		<a href="/blog2/blog_crud" class="btn btn-info btn-sm col-12 col-sm-6" role="button">Manage posts</a>
	</div>
	@foreach($posts as $row)
	<div class="well">			
			<h3><a href="{{action('PostsController@show',$row['id'])}}">{{$row['title']}}</a></h3>
			<small>Written on {{$row['created_at']}}</small>
		</div>
	@endforeach

@endsection