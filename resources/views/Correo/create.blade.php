@extends('layouts.principal')

@section('hijos')

<h1>Agregar Correo</h1>

<div class="container">
<div class="row">
<div class="col">



<form action="/Correo" method = "POST">
    @csrf
    <div class="mb-3">
    <label for="">IDPERSONA</label>
    <input type="text" value='{{$id}}'  name="idpersona" class="form-control">
    </div>


    <div class="mb-3">
    <label for="">CORREO</label>
    <input type="text" name="correo"  class="form-control" >
    </div>

    
    

    <button type="submit">Guardar</button>
    
</form>

</div>
</div>
</div>


@endsection