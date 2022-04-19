@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a la página principal</h1>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection