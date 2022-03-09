@extends('layouts.post')
@section('content')

	<h1>Post № {{ $post->id }}</h1>
	{{ $post->title }}<br>
	{{ $post->content }}<br>
	{{ $post->created_at }}<br>
	{{ $post->updated_at }}<br>

    <a class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">edit</a>
	<form action="{{ route('posts.destroy', $post->id) }}" method="post">
	@csrf
	@method('DELETE')
	<input class="btn btn-danger" type="submit" value="Delete">
	</form>
@endsection
