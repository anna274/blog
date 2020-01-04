<!DOCTYPE html>
<html>
    <head>
        <title>HOW TO LIVE
                @section('title')
                @show
        </title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/palm.png')}}"> 
        <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all">
    </head>
    <body> <!-- background="{{url('assets/img/photo.jpg')}}"-->
        <div id="wrap">
            @include('partials._nav')
            <div class = "main">
                @yield('content')    
            </div>
        </div>
            @include('partials._footer')
    </body>
</html>