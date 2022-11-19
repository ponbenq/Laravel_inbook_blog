@extends('main')
<?php $titleTag  = htmlspecialchars($post->title);?>
@section('title', " | $titleTag")

@section('content')

    <div class="row">
        <div class="col-md-8  offset-md-2 text-start">
            <br>
            <h1 style="color: #f56a79">{!!$post->title !!}</h1>
            <br>
            <hr>
            <br>
            <p>{!! $post->body !!}</p>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="text-start m-3" col-md-8 offset-md-2>
            <h3><i class="bi bi-chat-left-quote-fill">  </i>{{$post->comments->count()}} Comment</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 text-start">
            
            @foreach($post->comments as $comment)
            <div class="comment " style="color: #2f3e46">
                <div class="auther-info">
                    <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=mm" }}" alt="" class="author-image rounded-circle bg-white">
                    <div class="auther-name">
                        <h4>{{$comment->name}}</h4>
                        <p class="form-text">{{$comment->created_at}}</p>
                    </div>
                </div>
                <div class="comment-content">
                    <p>{{$comment->comment}}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>

    <br>
    <hr>
    <br>
    <div class="row mt-2 mb-2 text-start">
        <div class="comment-form col-md-8 offset-md-2">
            {!! Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) !!}

            <div class="row">
                <div class="col-md-6">
                    {!! Form::label('name', 'Name:' ) !!}
                    {!! Form::text('name', null, ['class' => 'form-control mb-2']) !!}
                </div>
                <div class="col-md-6">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', null, ['class' => 'form-control mb-2']) !!}
                </div>
                <div class="col-md-12">
                    {!! Form::label('comment', 'Comment:') !!}
                    {!! Form::textarea('comment', null, ['class' => 'form-control mb-2', 'rows' => '5']) !!}

                    {!! Form::submit('Add Comment', ['class' => 'btn btn-success btn-blog']) !!}
                </div>
            </div>
            

            {!! Form::close() !!}
        </div>
    </div>

@stop
