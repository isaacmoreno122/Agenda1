@extends('layouts.principal')

@section('hijos')

<h1> Editar Numero </h1>


<form action="/Telefono/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <label for="">ID</label>
    <input type="text" name="idpersona" id="idpersona" value="{{$editarRegistro->idpersona}}">

    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$editarRegistro->telefono}}">

   


    <button type="submit">Guardar</button>

</form>


@endsection