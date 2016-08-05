@extends('layouts.admin')

@section('contenido')
{!!Form::open(['route'=>'funcionario.store','method'=>'POST'])!!}
	<input type="text" id="cod" name="cod" placeholder="Codigo"><br>
	<input type="text" id="nombres" name="nombres" placeholder="Nombre"><br>
	<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos"><br>
	<input type="date" id="nacimiento"name="nacimiento" placeholder="Fecha de Nacimineto"><br>
	<input type="text" id="ci" name="ci" placeholder="CI"><br>
	<input type="number" id="telefono" name="telefono" placeholder="Telefono"><br>
	<input type="email" id="correo" name="correo" placeholder="Correo Electronico"><br>
	<input type="submit" id="guardar" name="guardar" placeholder="GUARDAR">
{!!Form::close()!!}

@stop
