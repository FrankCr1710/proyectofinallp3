@extends('layouts.app')

@section('content')
<h1>Registro Municipalidad</h1>
<form method="post" action="/municipalidad/agregar">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre: ">
    <input type="submit" value="Guardar">
</form>
@endsection