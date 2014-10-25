@extends('layouts.base')
@section('content')
<div class="row">
<h3>Crear usuario</h3>
{{ Form::open(array('url' => 'usuarios/crear')) }}
    @if (Session::get('mensaje'))
        <div class="alert alert-success">{{ Session::get('mensaje')}}</div>
    @endif
    <div class="form-group">
        {{Form::label('email', 'E-mail')}}
        {{Form::email('email', '',array('class'=>'form-control'))}}
    </div>
    @if ( $errors->has('email'))
        @foreach ($errors->get('email') as $error)
        <div class="alert alert-danger">* {{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {{Form::label('real_name', 'Real Name')}}
        {{Form::text('real_name', '',array('class'=>'form-control'))}}
    </div>
    @if ( $errors->has('real_name'))
        @foreach ($errors->get('real_name') as $error)
        <div class="alert alert-danger">* {{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::password('password', array('class'=>'form-control'))}}
    </div>
    @if ( $errors->has('password'))
        @foreach ($errors->get('password') as $error)
        <div class="alert alert-danger">* {{ $error }}</div>
        @endforeach
    @endif
{{Form::submit('Guardar',array('class'=>'btn btn-lg btn-primary'))}}
{{Form::reset('Resetear',array('class'=>'btn btn-lg btn-default'))}}
{{ Form::close() }}

 <p>{{ HTML::link('usuarios', 'Listar Usuarios'); }}</p>
</div>
@stop