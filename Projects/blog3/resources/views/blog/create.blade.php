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

        <form @submit.prevent="savePost" class="mb-3">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" v-model="post.title">
                <template v-if="errors.title">
                    <span v-text="errors.title[0]"></span>
                </template>
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Content" v-model="post.content" cols="30" rows="5"></textarea>
                <template v-if="errors.content">
                    <span v-text="errors.content[0]"></span>
                </template>
            </div>
            <div class="form-group">
                <input type="text" name="author" class="form-control" placeholder="Author" v-model="post.author">
                <template v-if="errors.author">
                    <span v-text="errors.author[0]"></span>
                </template>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
</div>
@endsection