@extends('main')

@section('title', " | $post->title")

@section('content')

    <div class="row">
        <div class="col-md-8  offset-md-2 text-start">
            <br>
            <h1>{{ $post->title }}</h1>
            <br>
            <hr>
            <br>
            <p>{{ $post->body }}</p>
        </div>
    </div>


@stop
