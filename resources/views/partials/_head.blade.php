<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

{{-- font Lato --}}
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100"> --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">

@yield('stylesheet')

{{-- bootstrap5 icon CDN --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
{{ Html::style('css/css.css') }}
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css') }}">
{{-- Style --}}
<style>
    body {
        font-family: 'Lato';
        background-color: white;
    }
    hr{
        background-color: #74706f;
    }
</style>
<title>InBook @yield('title')</title>
