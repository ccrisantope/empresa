@extends('layouts.master')
@section('title','personas|'.$persona->nPerCodigo)
@section('content')
    <h2>Personas</h2>
    <ul>

        <li>
            Apellido:   {{$persona->cPerApellido}}
        </li>
        <li>
            Nombre: {{$persona->cPerNombre}}
        </li>
        <li>
            Direccion:  {{$persona->cPerDireccion}}
        </li>
        <li>
            Fecha de Nacimiento:    {{$persona->dPerFecNac}}
        </li>
        <li>
            Edad:   {{$persona->nPerEdad}}
        </li>
        <li>
            Sueldo:  {{$persona->nPerSueldo}}
        </li>
        <li>
            Rnd:    {{$persona->cPerRnd}}
        </li>
        <li>
            Estado: {{$persona->cPerEstado}}
        </li>
        <li>
            Creado: {{$persona->created_at->diffForHumans()}}
        </li>
    </ul>
@endsection
