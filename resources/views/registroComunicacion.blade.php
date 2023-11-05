@extends('layouts.app')

@section('content')
<h1>Registro comunicacion</h1>
<form method="post" action="/comunicacion/agregar">
    @csrf
    <input type="text" name="asunto" placeholder="Ingrese nombre: ">
    <input type="text" name="mensaje" placeholder="Ingrese direccion: ">
    <input type="date" name="fecha" placeholder="Seleccione una fecha:">
    <input type="hidden" name="municipalidad_id" value="1">
    <input type="hidden" name="responsable_id" value="1">
    <input type="submit" value="Guardar">
</form>
@endsection