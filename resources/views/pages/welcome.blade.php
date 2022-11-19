@extends('main')

@section('title', ' | HomePage')

@section('stylesheet')


    <style>
        #welcomejumb {
            background-color: #ff414d;
            color: white;
        }

        #welbtn {
            color: #2f3e46;
            background-color: #f1faee;
        }

        #sidebar {
            color: #2f3e46;
            background-color: #f1faee;
        }

        #welcome-blog-post {
            background-color: #1aa6b7;

        }
    </style>

@endsection

@section('jumbotron')
    {{-- jumbotron --}}
    <hr><br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="container-fluid py-5  rounded" id="welcomejumb">
                    <h1 class="display-5 fw-bold">Welcome To InBook!</h1>
                    <p class="lead mx-5">
                        Read It Like You Mean It.
                    </p>
                    <a href="posts/create" class="btn  btn-xl" id="welbtn">Start Create Post!</a>

                </div>
            </div>

            <br><br>
            <hr>
            {{-- end of jumbotron --}}
        @endsection
        {{-- info and sidebar --}}

        @section('content')
            <br><br>
            <div class="row align-items-md-stretch">
                <div class="col-md-9">
                    @foreach ($post as $item)
                        <div class="h-20 p-5 mb-3 text-light rounded-3 text-start" id="welcome-blog-post">
                            <h2>{{ $item->title }}</h2>
                            <p class="lead">
                                {{ substr(strip_tags($item->body), 0, 300) }}{{ strlen(strip_tags($item->body)) > 300 ? '...' : '' }}
                            </p>
                            <a href="{{ url('blog/' . $item->slug) }}" class="btn btn-outline-light">Read More</a>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-3 d-flex flex-column align-items-stretch text-start">
                    <div class="h-20 p-5 rounded-3 " id="sidebar">
                        <h2>Our Team</h2>
                        <p class="lead">Wichit Pukrongthong</p>
                        <p class="form-text">Typing lover and fan of Geohotz</p>
                        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="bi bi-facebook"></i></a>
                        <p class="lead">Team member #2</p>
                        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="bi bi-facebook"></i></a>
                        <p class="lead">Team member #3</p>
                        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="bi bi-facebook"></i></a>
                        <i class="bi bi-twitter"></i>

                    </div>
                </div>
            </div>

            <br><br>
        </div>
    </div>
@endsection
