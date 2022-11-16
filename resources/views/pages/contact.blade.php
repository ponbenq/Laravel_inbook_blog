@extends('main')

@section('title', ' | Contact Page')
@section('content')
    <hr><br><br>

    <div class="container ">
        <div class="container-fluid py-5 bg-light text-dark rounded col-md-6">
            <div class="    ">
                <h1 class="display-5 fw-bold">Contact Us</h1>
                <hr>
                <form class="mx-3 text-start">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>
    </div>

    <br><br>
    
@endsection
