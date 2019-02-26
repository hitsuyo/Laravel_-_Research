@extends('layouts.app')

@section('content')
    <div class="row">
	    <div class="col-md-12">
	        <br />
	        <h3 align="center">Blog</h3>
	        <br />
	        @if($message = Session::get('success'))
	        <div class="alert alert-success">
	        	<p>{{$message}}</p>
	        </div>
	        @endif
	        <div align="right">
	        	<a href="/blog6/blog/create" class="btn btn-primary">Add</a>
	        	<br />
	        	<br />
	        </div>
	        <table class="table table-bordered">
	            <tr>
	                <th>Title</th>
	                <th>Content</th>
	                <th>Edit</th>
	                <th>Delete</th>
	            </tr>
	            @foreach($posts as $row)
	            <tr>
	            	<td>{{$row['title']}}</td>
	            	<td>{{$row['content']}}</td>
	            	<td><a href="{{action('PostsController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
	            	<td>
	            		<form method="post" class="delete_form" action="{{action('PostsController@destroy',$row['id'])}}">
            				{{csrf_field()}}
            				<input type="hidden" name="_method" value="DELETE" />
            				<button type="submit" class="btn btn-danger">Delete</button>
            			</form>
	            	</td>
	            </tr>
	            @endforeach
	        </table>
	    </div>
	</div>
@endsection