@extends('main')

@section('title', ' | Edit Blog Post')

@section('content')

    <div class="row">

        <div class="col-md-8">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'class' => 'text-start', 'method' => 'PUT']) !!}
            {!! Form::label('title', 'Title:' ) !!}
            {!! Form::text('title', null, ['class' => 'form-control mb-2']) !!}
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control mb-2']) !!}
            
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
                        {!! link_to_route('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-secondary btn-block']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>


@endsection
