@extends('main')

@section('title', ' | HomePage')
@section('jumbotron')
    {{-- jumbotron --}}
    <hr><br><br>
    <div class="row">

    
    <div class="col-md-3">
        <div class="flex-fill d-flex text-dark text-start " style="width: 100%; height: 100%;">
            <div class="h-20 p-5 bg-light border rounded-3 text-dark w-100">
                <p>
                    <button class="fa btn btn-dark bi bi-chevron-compact-right" data-bs-toggle="collapse" data-bs-target="#collapseExample">
                        Home
                    </button>  
                </p>
                <div class="collapse mx-auto" id="collapseExample" >
                   <ul class="btn-toggle-nav list-unstyled fw-norma pb-1 small">
                    <li><a href="#" class="link-dark rounded">OverView</a></li>
                    <li><a href="#" class="link-dark rounded">Updates</a></li>
                    <li><a href="#" class="link-dark rounded">Reports</a></li>
                   </ul>
                </div>
                
                <hr>
                
            </div>
            
        </div>
    </div>
    <div class="col-md-9">
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
                @foreach ($post as $item)
                    <div class="h-20 p-5 text-white bg-dark rounded-3 text-start">
                        <h2>{{ $item->title }}</h2>
                        <p class="lead">{{ substr($item->body, 0, 300) }}{{ strlen($item->body) > 300 ? "..." : ""}}</p>
                        <a href="posts/{{ $item->id }}" class="btn btn-outline-light">See Post</a>
                    </div>
                @endforeach
                {{-- <div class="h-20 p-5 text-white bg-dark rounded-3">
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
            --}}
            </div>
            <div class="col-md-3 d-flex">
                <div class="h-20 p-5 bg-light border rounded-3 text-dark">
                    <h2>Sidebar</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, alias!</p>
                    <button class="btn btn-outline-dark" type="button">Example button</button>
                </div>
            </div>
        </div>

        <br><br>
    </div>
    </div>
@endsection
