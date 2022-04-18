@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{route('cursos.store')}}" method='POST'>

        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label>

        <label>
            Descripcion:<br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>

        <label>
            Categoria:<br>
            <input type="text" name="categoria">
        </label>

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection