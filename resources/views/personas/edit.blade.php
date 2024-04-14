@extends('layouts.principal')

@section('hijos')

<h1> Editar Numero </h1>


<form action="/personas/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <label for="">ID</label>
    <input type="text" name="id" id="id" value="{{$editarRegistro->id}}">

    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editarRegistro->nombre}}">

    <lable for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editarRegistro->apellido}}">
    <br> <br>

    <lable for="">Telefono</label>
    <input type="text" name="Telefono" id="Telefono" value="{{$editarRegistro->Telefono}}">

    <lable for="">Correo</label>
    <input type="text" name="Correo" id="Correo" value="{{$editarRegistro->Correo}}">


    <button type="submit">Guardar</button>

</form>



@endsection