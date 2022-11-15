@extends('layouts.master')
@section('title','personas|'.$persona->nPerCodigo)
@section('content')
    <h2>Personas</h2>
    <td colspan="4">{{$persona->cPerNombre}}
        <a href="{{route('personas.edit',$persona)}}">Editar</a>
    </td>
    <td colspan="4">
        <form action="{{route('personas.destroy',$persona)}}" method="POST">
            @csrf @method('DELETE')
            <button>Eliminar</button>
    </td>
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
