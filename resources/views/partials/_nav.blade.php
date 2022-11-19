 @section('stylesheet')

    <style>
        #nav-out{
            background-color: white;
        }
        
    </style>

 @endsection
 
 {{-- default nav bar --}}

 <div class="container mb-2 " id="conatiner-nav">
     <nav class="navbar navbar-expand-lg navbar-light" id="nav-out">
         <div class="container-fluid">
             <a class="navbar-brand" href="/">InBook</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ">
                     <li class="nav-item">
                         <a class="nav-link {{ Request::is('/') ? "active" : ""}}" aria-current="page" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link {{ Request::is('blog') ? "active" : ""}}" href="/blog">Blog</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link {{ Request::is('about') ? "active" : ""}}" href="/about">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ Request::is('contact') ? "active" : ""}}" href="/contact">Contact</a>
                     </li>
                 </ul>
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @Auth
                    <a href="{{ route('posts.create')}}" class="btn btn-outline-success btn-sm p-2 me-2">+ Create Post</a>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             {{Auth::user()->name}}
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="{{route('posts.index')}}">Posts</a></li>
                             <li><a class="dropdown-item" href="{{ route('home')}} ">Profile</a></li>
                             <li>
                                 <hr class="dropdown-divider">
                             </li>
                             {{-- <li><a class="dropdown-item" href="#">log out</a></li> --}}
                             
                             <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                                 
                             </form></li>
                             
                         </ul>
                     </li>
                     @else
                     <a href="{{ route('login')}}" class="btn btn-outline-dark btn-sm p-2 me-2">Login</a>
                     @endauth
                 </ul>
             </div>
         </div>
     </nav>
 </div>
