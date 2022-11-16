<!doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body class="bg-dark text-white justify-content-center align-items-center text-center">
    {{-- navbar --}}
    @include('partials._nav')
    {{-- end navbar --}}

    {{-- content part --}}
    <div class="container">
        @include('partials._messages')
        @yield('jumbotron')
        @yield('content')
    </div>
    {{-- end of content part --}}

    {{-- footer --}}
    @include('partials._footer')
    {{-- end section --}}

    {{-- javascript section --}}
    @include('partials._javascript')
    {{-- end section --}}
</body>

</html>
