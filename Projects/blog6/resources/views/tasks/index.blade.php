@extends('layouts.blank')

@section('content')
	@foreach ($tasks as $task)
		<li>
			<a href="/blog6/tasks/{{ $task->id }}">
				{{ $task->body }}
			</a>
	@endforeach
@endsection