@extends('layouts.principal')

@section('hijos')

<h1>Agregar Persona</h1>

<div class="container">
<div class="row">
<div class="col">



<form action="/personas" method = "POST">
    @csrf
    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control" >
    </div>

    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Correo</label>
    <input type="text" name="correo"  class="form-control">
    </div>
    
    

    <button type="submit">Guardar</button>
    <a href="/personas">Regresar</a>
</form>

</div>
</div>
</div>


@endsection