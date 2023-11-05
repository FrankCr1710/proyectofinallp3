@extends('layouts.app')

@section('content')
<h1>Registro Establecimiento</h1>
<form method="post" action="/establecimiento/direccion">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre: ">
    <input type="text" name="direccion" placeholder="Ingrese direccion: ">
    <input type="hidden" name="distrito_id" value="1">
    <input type="hidden" name="responsable_id" value="1">
    <input type="submit" value="Guardar">
</form>
@endsection