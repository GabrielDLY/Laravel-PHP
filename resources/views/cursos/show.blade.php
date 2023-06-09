@extends('layaouts.plantilla')

@section('title', 'Cursos '.$curso->name)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a los demas cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Categoria: </strong> {{$curso->categoria}}</p>
    <p><strong>Descripcion: </strong>{{$curso->descripcion}}</p>

    <form id='eliminar-curso' 
	action="{{ route('cursos.destroy', $curso) }}" 
	method="POST">
        @csrf    
        @method("delete")
        {{-- <button type="submit">Eliminar</button> --}}
        <input 
            type="button" 
            value="Eliminar" 
            onclick="if(confirm('¿Confirma eliminar?')){
                document.getElementById('eliminar-curso').submit()
            };" 
        />
    </form>
@endsection
