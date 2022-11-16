@extends('main')

@section('title', ' | HomePage')
@section('jumbotron')
    {{-- jumbotron --}}
    <hr><br><br>
    <div class="container">
        <div class="container-fluid py-5 bg-light text-dark rounded">
            <h1 class="display-5 fw-bold">Heading</h1>
            <p class="lead mx-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eveniet veniam recusandae quae pariatur
                laborum quaerat libero obcaecati, fugiat nobis.
            </p>
            <a href="posts/create" class="btn btn-dark btn-xl">Start Create Post!</a>
            
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
        <div class="col-md-8">
            <div class="h-20 p-5 text-white bg-dark rounded-3">
                <h2>Post</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, accusamus!</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>

            <hr>
            <div class="h-20 p-5 text-white bg-dark rounded-3">
                <h2>Post</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, accusamus!</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>

            <hr>
            <div class="h-20 p-5 text-white bg-dark rounded-3">
                <h2>Post</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, accusamus!</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>

        </div>
        <div class="col-md-3">
            <div class="h-20 p-5 bg-light border rounded-3 text-dark">
                <h2>Sidebar</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, alias!</p>
                <button class="btn btn-outline-dark" type="button">Example button</button>
            </div>
        </div>
    </div>

    <br><br>
    
@endsection
