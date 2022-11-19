@extends('main')

@section('title', ' | Contact Page')
@section('content')
    <hr><br><br>

    <div class="container ">
        <div class="container-fluid py-5  text-light rounded col-md-6" style="background-color: #2f3a56;">
            <div class="    ">
                <h1 class="display-5 fw-bold">Contact Us</h1>
                <hr>
                <form class="mx-3 text-start" action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3 form-group">
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 form-group">
                        <div class="form-group">
                            <label name="subject">Subject:</label>
                            <input id="subject" name="subject" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 form-group">
                        <div class="form-group">
                            <label name="message">Message:</label>
                            <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

            </div>

        </div>
    </div>

    <br><br>

@endsection
