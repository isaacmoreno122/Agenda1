@extends('layouts.principal')

@section('hijos')
<br>

<h3>Vista para los Personas</h3>
<br>

<a href="personas/create" class="btn btn-primary">Agregar Nueva Persona</a>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Numero Principal</th>
                  <th scope="col">Correo Principal</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($personas as $persona)
                <tr>
                    <th>{{$persona->id}}</th>
                    <th>{{$persona->nombre}}</th>
                    <th>{{$persona->apellido}}</th>
                    <th>{{$persona->Telefono}}</th>
                    <th>{{$persona->Correo}}</th>
                    
                    <th>
                        <a href="personas/{{$persona->id}}/edit" class="btn btn-info" style="color: white;">Editar</a>
                        <a href="/Telefono/{{$persona->id}}" class="btn btn-success">Agregar Telefono</a>
                        <a href="Correo/{{$persona->id}}" class="btn btn-success">Agregar Correo</a>
                        
                    </th>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>

@endsection