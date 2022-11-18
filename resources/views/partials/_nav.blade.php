 {{-- default nav bar --}}

 <div class="container ">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">InBook</a>
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
                         <a class="nav-link {{ Request::is('about') ? "active" : ""}}" href="/about">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ Request::is('contact') ? "active" : ""}}" href="/contact">Contact</a>
                     </li>
                 </ul>
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a href="{{ route('posts.create')}}" class="btn btn-outline-success btn-sm p-2 me-2">+ Create Post</a>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Myaccount
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#">Action</a></li>
                             <li><a class="dropdown-item" href="#">Another action</a></li>
                             <li>
                                 <hr class="dropdown-divider">
                             </li>
                             <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </div>
