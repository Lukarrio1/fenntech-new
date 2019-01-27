<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Fenntech @yield('title')</title>
</head>
<body>
    <div class="row">
<div class="col-6 offset-3 pt-5">
        @yield('content') 
</div>
    </div>

<script src="{{asset('js/landing.js')}}"></script>
</body>
</html>