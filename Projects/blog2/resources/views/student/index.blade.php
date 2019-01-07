@extends('layouts.app')

@section('content')
    <div class="row">
	    <div class="col-md-12">
	        <br />
	        <h3 align="center">Student</h3>
	        <br />
	        @if($message = Session::get('success'))
	        <div class="alert alert-success">
	        	<p>{{$message}}</p>
	        </div>
	        @endif
	        <div align="right">
	        	@if(!Auth::guest())
	        		<a href="/blog2/student/create" class="btn btn-primary">Add</a>
        		@endif
	        	<br />
	        	<br />
	        </div>
	        <table class="table table-bordered">
	            @if(Auth::guest())
		            <tr>
		                <th>First Name</th>
		                <th>Last Name</th>
		            </tr>


		            @foreach($students as $row)
		            <tr>
		            	<td>{{$row['first_name']}}</td>
		            	<td>{{$row['last_name']}}</td>
		            </tr>
		            @endforeach

		        @else
		            <tr>
		                <th>First Name</th>
		                <th>Last Name</th>
		                <th>Edit</th>
		                <th>Delete</th>
		            </tr>

		            @foreach($students as $row)
		            <tr>
		            	<td>{{$row['first_name']}}</td>
		            	<td>{{$row['last_name']}}</td>
		            	<td><a href="{{action('StudentController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
		            	<td>
		            		<form method="post" class="delete_form" action="{{action('StudentController@destroy',$row['id'])}}">
	            				{{csrf_field()}}
	            				<input type="hidden" name="_method" value="DELETE" />
	            				<button type="submit" class="btn btn-danger">Delete</button>
	            			</form>
		            	</td>
		            </tr>
		            @endforeach
		        @endif
	        </table>
	    </div>
	</div>
@endsection