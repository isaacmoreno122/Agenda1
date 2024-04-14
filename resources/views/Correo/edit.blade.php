@extends('layouts.principal')

@section('hijos')

<h1> Editar Correo </h1>


<form action="/Correo/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <label for="">ID</label>
    <input type="text" name="idpersona" id="idpersona" value="{{$editarRegistro->idpersona}}">

    <label for="">Correo</label>
    <input type="text" name="correo" id="correo" value="{{$editarRegistro->correo}}">

   


    <button type="submit">Guardar</button>

</form>


@endsection