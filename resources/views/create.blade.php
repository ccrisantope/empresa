@extends('layouts.master')

@section('title','Crear Persona')

@section('content')
<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Agregar nuevo usuario</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('personas.store') }}" method="post">
    @include('partials.form',['btnText'=>'Guardar'])
    </form>
</table>
@endsection
