
@extends('layouts.master')
@section('title','Servicios')
@section('content')

    <h2>Servicios</h2>
    <tr>
        <td colspan="4">
            <a href="{{route('personas.create')}}">Nuevo Servicio</a>
        </td>
    </tr>
        <th colspan="4">Listado de Personas</th>
    <tr>
        @if($personas)
            @foreach($personas as $personas)
                <td>
                    <a href="{{route('personas.show',$personas)}}">{{$personas->cPerApellido}}  {{$personas->cPerNombre}}</a>
                </td>
            @endforeach

        @else
            <td>No existe ningun servicio que mostrar</td>
        @endif
    </tr>
@endsection
