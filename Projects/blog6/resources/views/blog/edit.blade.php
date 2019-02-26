<!-- blog -->

@extends('layouts.app')

@section('content')
	
<div class="row">
    <div class="col-md-12">
        <br />
        <h3>Edit Record</h3>
        <br />
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{action('PostsController@update', $id)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group">
			    <input type="text" name="post_title" class="form-control" value="{{$post->title}}" placeholder="Enter New Title" />
			</div>
            <div class="form-group">
                <input type="text" name="post_content" class="form-control" value="{{$post->content}}" placeholder="Enter New Content" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit"/>
            </div>
        </form>
    </div>
</div>

@endsection