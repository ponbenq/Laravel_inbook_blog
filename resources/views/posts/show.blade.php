@extends('main')

@section('title', ' | View Post')

@section('content')
    <div class="row p-3 m-3">
        <div class="col-md-8 text-start">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4 bg-light text-dark rounded">
            <div class="container h-100">
                <div class="well h-100">
                    <div class="row pt-2 p-2">
                        <dl class="dl-horizontal">
                            <dt>Url:</dt>
                            <dd><a href="{{ route('blog.single',$post->slug) }}">{{url('blog/'.$post->slug)}}</a></dd>
                        </dl>
                        <div class="col-sm-6">
                            <dl class="dl-horizontal">
                                <label>Crate At:</label>
                                <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                            </dl>
                        </div>
                        <div class="col-sm-6">
                            <dl class="dl-horizontal">
                                <label>Last Updated:</label>
                                <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                            </dl>
                        </div>
                    </div>

                    <hr>

                    <div class="row pb-2 p-2">
                        <div class="col-sm-6">
                            {!! link_to_route('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row pb-2  ">
                        <div class="col-md-12 mt-2 ">
                            {!! link_to_route('posts.index', '<< See All Posts', [$post], ['class' => 'btn btn-secondary btn-block ']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
