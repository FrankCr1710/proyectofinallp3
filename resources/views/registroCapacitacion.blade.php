@extends('layouts.app')

@section('content')
<h1>Registro Capacitacion</h1>
<form method="post" action="/capacitacion/agregar">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre: ">
    <input type="date" name="fecha" placeholder="Seleccione una fecha:">
    <input type="text" name="descripcion" placeholder="Ingrese nombre: ">
    <input type="text" name="tipo" placeholder="Ingrese nombre: ">
    <input type="hidden" name="municipalidad_id" value="1">
    <input type="hidden" name="responsable_id" value="1">
    <input type="submit" value="Guardar">
</form>
@endsection