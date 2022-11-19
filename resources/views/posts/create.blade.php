@extends('main')

@section('title', ' | Create Page')
@section('stylesheet')
{{-- tinymce cdn --}}
<script src="https://cdn.tiny.cloud/1/mdw9ybmf60zvhtb4ppap2s930r0tly8i83keowxsvvq6rz86/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
      
    });
  </script>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store','class' => 'text-start']) !!}
                {{Form::label('title', 'Title:' ,['class' => 'control-label'])}}
                {{Form::text('title', null, ['class' => 'form-control mb-2'])}}

                {!! Form::label('slug', 'Slug:', ) !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                {!! Form::label('body', 'Post Body :') !!}
                {!! Form::textarea('body', null, ['class'=> 'form-control mb-2']) !!}
                {!! Form::submit('Create Post', ['class' => 'btn btn-success btn-lg mt-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
