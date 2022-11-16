@extends('main')

@section('title', ' | Create Page')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store','class' => 'text-start']) !!}
                {{Form::label('title', 'Title:' ,['class' => 'control-label'])}}
                {{Form::text('title', null, ['class' => 'form-control mb-2'])}}
                {!! Form::label('body', 'Post Body :') !!}
                {!! Form::textarea('body', null, ['class'=> 'form-control mb-2']) !!}
                {!! Form::submit('Create Post', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
