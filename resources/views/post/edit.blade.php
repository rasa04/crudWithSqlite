@extends('layouts.post')
@section('content')
	<h1>Edit post № {{ $post->id }}</h1>
	<form action="{{ route('posts.update', $post->id) }}" method="post">
		@csrf
		@method('PATCH')
		<div class="mb-3">
			<label class="form-label" for="title">Title</label>
			<input class="form-control" name="title" type="text" value="{{ $post->title }}" id="title">
		</div>
		<div class="mb-3">
			<label class="form-label" for="title">Content</label>
			<input class="form-control" name="content" type="text" value="{{ $post->content }}" id="content">
		</div>

		<button class="btn btn-primary" type="submit">Change</button>
	</form>
	<a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
@endsection