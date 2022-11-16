@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger text-start" role="alert">
        <strong>Errors:</strong>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif