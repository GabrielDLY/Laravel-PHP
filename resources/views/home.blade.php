@extends('layaouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a la pagina principal</h1>
    <a href="{{route('cursos.index')}}">Conoce Nuestros Cursos Aqui</a>
@endsection