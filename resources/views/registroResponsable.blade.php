@extends('layouts.app')

@section('content')
<h1>Registro Responsable</h1>
<form method="post" action="/responsable/agregar">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese nombre: "><br>
    <input type="text" name="apellido" placeholder="Ingrese apellido: "><br>
    <input type="text" name="telefono" placeholder="Ingrese telefono: "><br>
    <input type="text" name="correo" placeholder="Ingrese correo: "><br>
    <input type="text" name="cargo" placeholder="Ingrese cargo: ">
    <input type="submit" value="Guardar">
</form>
@endsection