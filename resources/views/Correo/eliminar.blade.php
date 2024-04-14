@extends('layouts.principal')

@section('hijos')

<h1>Eliminar Correo</h1>

<form action="/Correo/{{$eliminarRegistro2->id}}" method="POST">
    @csrf
    @method('Delete')
    <label for="">IDPERSONA</label>
    <input type="text" name="idpersona"  id="idpersona" value="{{$eliminarRegistro2->idpersona}}">

    <label for="">TELEFONO</label>
    <input type="text" name="correo"  id="correo" value="{{$eliminarRegistro2->correo}}">

 
    <button type="submit">Eliminar</button>
</form>

@endsection