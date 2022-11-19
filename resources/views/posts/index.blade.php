@extends('main')

@section('title', ' | All Posts')

@section('content')

    <div class="row mt-3 text-start">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-outline-success btn-sm p-2 me-2">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of .row -->


	<div class="row text-start">
		<div class="col-md-12">
			<table class="table ">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($post as $item)
						
						<tr>
							<th>{{ $item->id }}</th>
							<td>{{ $item->title }}</td>
							<td>{{ substr(strip_tags($item->body), 0, 50) }}{{ strlen(strip_tags($item->body)) > 50 ? "..." : "" }}</td>
							<td><a href="{{ route('posts.show', $item->id) }}" class="btn btn-default btn-light btn-sm m-1">View</a> <a href="{{ route('posts.edit', $item->id) }}" class="btn btn-default btn-light btn-sm m-1">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>
    <div>
        {{$post->links('pagination::bootstrap-4');}}
    </div>

@stop
