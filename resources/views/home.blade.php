@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- <div class="card"> --}}
                    {{-- <div class="card-header" style="background-color: #a0b2c2">{{ __('Dashboard') }}</div> --}}

                    {{-- <div class="card-body"style="background-color: #d1d9df">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>{{ Auth::user()->name }}</h1>
                        <p>Status:</p>
                        {{ __('You are logged in!') }}
                        <br>
                        {{ __(Auth::user()->email) }}


                    </div> --}}

                {{-- </div> --}}
                <div class="col-md-4 offset-md-4">
                    <div class="card mb-4" >
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{Auth::user()->name}}</h5>
                            <p class="text-muted mb-1">{{Auth::user()->email}}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">Follow</button>
                                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
@endsection
