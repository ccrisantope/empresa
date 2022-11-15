@extends('layouts.master')

@section('title','Crear Persona')

@section('content')
<table cellpadding="3" cellspaceing="5">
<tr>
    <th colspan="4">Agregar nuevo usuario</th>
</tr>
<form action="{{ route('personas.store') }}" method="post">
@csrf
<tr>
    <th>Apellidos</th>
    <td><input type="text" name="cPerApellido"><br> {{ $errors->first('cPerApellido') }}</td>
</tr>
<tr>
    <th>Nombre</th>
    <td><input type="text" name="cPerNombre"><br> {{ $errors->first('cPerNombre') }}</td>
</tr>
<tr>
    <th>Direccion</th>
    <td><input type="text" name="cPerDireccion"><br> {{ $errors->first('cPerDireccion') }}</td>
</tr>
<tr>
    <th>Fecha de nacimiento</th>
    <td><input type="date" name="dPerFecNac" required><br> {{ $errors->first('dPerFerNac') }} </td>
</tr>
<tr>
    <th>Edad</th>
    <td><input type="text" name="nPerEdad"><br> {{ $errors->first('nPerEdad') }}</td>
</tr>
<tr>
    <th>Sueldo</th>
    <td><input type="number" name="nPerSueldo"><br> {{ $errors->first('nPerSueldo') }}</td>
</tr>
<tr>
    <th>Codigo</th>
    <td><input type="number" name="cPerRnd"><br> {{ $errors->first('cPerRnd') }}</td>
</tr>
<tr>
    <th>Estado (Ingrese un solo dígito)</th>
    <td><input type="text" name="cPerEstado"><br> {{ $errors->first('nPerEstado') }}</td>
</tr>

<tr>
    <td colspan="2" align="center"><button>Guardar</button></td>
</tr>
</form>
</table>
@endsection
