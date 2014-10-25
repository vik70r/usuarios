@extends('layouts.base')
@section('sidebar')
@parent
<div class="jumbotron">
        <h1>Gestión Usuarios</h1>
        <p class="lead">Lo que mas importa son nuestros contactos...</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Iniciar Sessión</a></p>
      </div>
@stop
@section('content')
      <div class="row marketing">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Usuarios Registrados</h3>
            </div>
            <div class="panel-body">
              @foreach($usuarios as $usuario)
              <li>{{ $usuario->email }} - {{$usuario->real_name}} </li>
              @endforeach
            </div>
          </div>
          <p>{{ HTML::link('usuarios/nuevo', 'Crear Nuevo Usuario'); }}</p>
          <h2>Tabla de usuarios</h2>
          <table class="table table-striped  table-hover table-condensed">
            <thead>
            <tr class="navbar-default">
                <th>Id</th>
                <th>E-mail</th>
                <th>Real Name</th>
                <th>Actualizado</th>
                <th>Creado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->real_name }}</td>
                <td>{{ $usuario->created_at }}</td>
                <td>{{ $usuario->updated_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@stop