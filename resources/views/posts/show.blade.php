@extends('main')

@section('title', ' | View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4 bg-light text-dark rounded">
            <div class="well">
                <div class="row pt-2">
                    <div class="col-sm-6">
                        <dl class="dl-horizontal">
                            <dt>Crate At:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                        </dl>
                    </div>
                    <div class="col-sm-6">
                        <dl class="dl-horizontal">
                            <dt>Last Updated:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                        </dl>
                    </div>
                </div>

                <hr>

                <div class="row pb-2">
                    <div class="col-sm-6">
                        {!! link_to_route('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! link_to_route('posts.destroy', 'Delete', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
