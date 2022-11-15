@extends('layouts.master')
@section('title','Editar Servicio')
@section('content')
<table cellpadding ="3" cellspaceing="5">
    <tr>
        <th colspan="4">Editar Servicio</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{route('personas.update',$persona)}}" method="post">
    @method('PATCH')
    @include('partials.form',['btnText'=>'Actualizar'])

</table>
@endsection
