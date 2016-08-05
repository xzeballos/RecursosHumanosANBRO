@extends('layouts.admin')

@section('contenido')

<table border="1">
<thead>
	<tr>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Correo</th>
	</tr>

</thead>
<tbody>
@foreach($funcionarios as $fun)

<tr>
	<td>{{$fun->cod_user}}</td>
	<td>{{$fun->nombres}}</td>
	<td>{{$fun->apellidos}}</td>
	<td>{{$fun->correo}}</td>

</tr>

@endforeach

</tbody>
</table>
@stop






