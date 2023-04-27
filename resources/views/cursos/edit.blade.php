@extends('layaouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    
    <form action="{{route('cursos.update', $curso)}}" method="post">

        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br> 
            <input type="text" name="name"  value="{{old('name', $curso->name)}}">
        </label>
        <br>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <input type="hidden" name="slug" value="slug">

        <label>
            Descripcion:
            <br> 
            <textarea name="descripcion" rows="5"> {{old('descripcion', $curso->descripcion)}}
            </textarea>
        </label>
        <br>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label>
            Categoria:
            <br> 
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection