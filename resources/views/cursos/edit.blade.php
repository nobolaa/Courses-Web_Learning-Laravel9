@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Editar curso {{$curso->name}}</h1>

    <form action="{{route('cursos.update', $curso->id)}}" method='POST'>

        @csrf
        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>

        <label>
            Descripcion:<br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>

        <label>
            Categoria:<br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection