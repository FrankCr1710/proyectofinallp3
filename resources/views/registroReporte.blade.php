@extends('layouts.app')

@section('content')
<h1>Registro Reporte</h1>
<form method="post" action="/reporte/agregar">
    @csrf
    <input type="text" name="tipo" placeholder="Ingrese nombre: ">
    <input type="text" name="contenido" placeholder="Ingrese direccion: ">
    <input type="date" name="fecha" placeholder="Seleccione una fecha:">
    <input type="text" name="mensaje" placeholder="Ingrese direccion: ">
    <input type="hidden" name="municipalidad_id" value="1">
    <input type="submit" value="Guardar">
</form>
@endsection