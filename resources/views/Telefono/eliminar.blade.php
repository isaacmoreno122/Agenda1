@extends('layouts.principal')

@section('hijos')

<h1>Eliminar Registro</h1>

<form action="/Telefono/{{$eliminarRegistro2->id}}" method="POST">
    @csrf
    @method('Delete')
    <label for="">IDPERSONA</label>
    <input type="text" name="idpersona"  id="idpersona" value="{{$eliminarRegistro2->idpersona}}">

    <label for="">TELEFONO</label>
    <input type="text" name="telefono"  id="telefono" value="{{$eliminarRegistro2->telefono}}">

 
    <button type="submit">Eliminar</button>
</form>

@endsection