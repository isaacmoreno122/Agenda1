@extends('layouts.principal')

@section('hijos')

<br>

<h3>Vista para los Telefonos</h3>
<br>


<a href="/Telefono/{{$idPersona}}/create" class="btn btn-primary">Agregar Nuevo Teléfono</a>


<br>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">idpersona</th>
                  <th scope="col">telefono</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($telefonos as $telefono)

                @if($telefono->idpersona==$idPersona)
                <tr>
                    <th>{{$telefono->id}}</th>
                    <th>{{$telefono->idpersona}}</th>
                    <th>{{$telefono->telefono}}</th>
                    
                    <th>
                        <a href="/Telefono/{{$telefono->id}}/edit" class="btn btn-info" style="color: white;">Editar</a>
                        <a href="/Telefono/{{$telefono->id}}/eliminar" class="btn btn-danger">Eliminar</a>
                        
                        
                    </th>
                </tr>

                @endif
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>


@endsection