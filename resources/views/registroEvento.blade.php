@extends('layouts.app')

@section('content')
<h1>Registro Evento</h1>
<form method="post" action="/evento/agregar">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre: ">
    <input type="date" name="fecha" placeholder="Seleccione una fecha:">
    <input type="text" name="lugar" placeholder="Ingrese direccion: ">
    <input type="text" name="descripcion" placeholder="Ingrese direccion: ">
    <input type="hidden" name="municipalidad_id" value="1">
    <input type="submit" value="Guardar">
</form>
@endsection