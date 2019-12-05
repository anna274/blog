<!DOCTYPE html>
<html>
    <head>
        <title>HOW TO LIVE @yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/palm.png')}}"> 
        <link rel="stylesheet" href="{{url('css/style.css')}}" media="all">
    </head>
    <body> <!-- background="{{url('assets/img/photo.jpg')}}"-->
        <font face = "Helvetica">
        @include('partials._nav')

        <div class = "main">
            @yield('content')    
        </div>
            @include('partials._footer')
    </body>
</html>