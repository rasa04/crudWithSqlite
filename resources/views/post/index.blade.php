@extends('layouts.post')
@section('content')

	<h1>Posts</h1>
	<table class="table">
	 	<thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Title</th>
	      <th scope="col">Content</th>
	      <th scope="col">Show</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>
	    </tr>
	 	</thead>
	 	<tbody>
@foreach($posts as $post)
    <tr>
    	
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->content }}</td>
      <td><a class="btn btn-info" href="{{ route('posts.show', $post->id) }}">show</a></td>
      <td><a class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">edit</a></td>
      <td>
	  <form action="{{ route('posts.destroy', $post->id) }}" method="post">
		@csrf
		@method('DELETE')
		<input class="btn btn-danger" type="submit" value="Delete">
	  </form>
      </td>
      
    </tr>
@endforeach	
		</tbody>
	</table>
@endsection
