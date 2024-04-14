@extends('layouts.principal')

@section('hijos')

<br>

<h3>Vista para los Correos</h3>
<br>


<a href="/Correo/{{$idPersona}}/create" class="btn btn-primary">Agregar Nuevo Correo</a>


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
                  <th scope="col">correo</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($correos as $correo)

                @if($correo->idpersona==$idPersona)
                <tr>
                    <th>{{$correo->id}}</th>
                    <th>{{$correo->idpersona}}</th>
                    <th>{{$correo->correo}}</th>
                    
                    <th>
                        <a href="/Correo/{{$correo->id}}/edit" class="btn btn-info" style="color: white;">Editar</a>
                        <a href="/Correo/{{$correo->id}}/eliminar" class="btn btn-danger">Eliminar</a>
                        
                        
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