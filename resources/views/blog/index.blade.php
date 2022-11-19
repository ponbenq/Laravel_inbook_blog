@extends('main')

@section('title', ' | Blog')

@section('content')

    <div class="row">
        <div class="col-md-12 text-start mt-3 mb-2">
            <h1 style="color: #3a86ff">All Blog</h1>
        </div>
    </div>

    @foreach($post as $item)
    <div class="row">
        <div class="col-md-8 offset-md-2 text-start mb-3 mt-3">
            <h2 style="color: #f56a79">{{ $item->title }}</h2>
            <h5>Published At:{{ date('M j, Y', strtotime($item->created_at))}}</h5>
            <p>{{ substr(strip_tags($item->body), 0, 250) }}{{ strlen(strip_tags($item->body)) > 250 ? "..." : "" }}</p>
            <a href="{{ route('blog.single', $item->slug)}}" class="btn btn-outline-dark">Read More</a>
            <hr>
        </div>
    </div>

    @endforeach

    <div class="row">
        <div class="col-md-12 offset-md">
            {{$post->links('pagination::bootstrap-4')}}
        </div>
    </div>

@stop