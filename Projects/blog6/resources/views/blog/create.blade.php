<!-- blog -->

@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">Add Post</h3>
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
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif

        <form method="post" action="{{url('blog') }}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="post_title" class="form-control" placeholder="Enter Post Title"/>
            </div>
            <div class="form-group">
                <textarea type="text" name="post_content" class="form-control" placeholder="Enter Post Content" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>

@endsection