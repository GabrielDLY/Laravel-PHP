@extends('layaouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label for="">
            Nombre:<br> 
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <label for="">
            Descripcion:<br> 
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        <br>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            Categoria:<br> 
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        <br>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <button type="submit">Enviar formulario</button>
    </form>
@endsection
