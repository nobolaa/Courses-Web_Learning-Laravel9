<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/layouts/plantilla.css')}}">
    <title>@yield('title')</title>

    <!-- favicon -->
    {{-- estilos --}}
</head>
<body>
    {{-- header &- nav --}}
    @include('layouts.partials.header')

    @yield('content')

    {{-- footer --}}
    @include('layouts.partials.footer')
    
    {{-- script --}}
</body>
</html>