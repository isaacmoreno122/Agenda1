@extends('layouts.principal')

@section('hijos')

<h1>Agregar Telefono</h1>

<div class="container">
<div class="row">
<div class="col">



<form action="/Telefono" method = "POST">
    @csrf
    <div class="mb-3">
    <label for="">IDPERSONA</label>
    <input type="text" value='{{$id}}'  name="idpersona" class="form-control">
    </div>


    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control" >
    </div>

    
    

    <button type="submit">Guardar</button>
    
</form>

</div>
</div>
</div>


@endsection