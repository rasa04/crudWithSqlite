@extends('layouts.post')
@section('content')

	<h1>Create</h1>
	<form action="{{ route('posts.store') }}" method="post">
		@csrf
		<div class="mb-3">
			<label class="form-label" for="title">Title</label>
			<input class="form-control" name="title" type="text" id="title">
		</div>
		<div class="mb-3">
			<label class="form-label" for="title">Content</label>
			<input class="form-control" name="content" type="text" id="content">
		</div>

		<button class="btn btn-primary" type="submit">Create</button>
	</form>
@endsection