@extends('layouts.blank')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7 col-md-offet-2">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<a href="/posts/create" class="btn btn-primary">Create Post</a>
					<h3>You are logged in</h3>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection