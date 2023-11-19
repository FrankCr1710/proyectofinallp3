@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>Registro Reporte</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="/reporte/agregar">
                        @csrf

                        <div class="form-group">
                            <label for="tipo">Tipo:</label>
                            <input type="text" name="tipo" class="form-control" placeholder="Ingrese tipo">
                        </div>

                        <div class="form-group">
                            <label for="contenido">Contenido:</label>
                            <textarea name="contenido" class="form-control" placeholder="Ingrese contenido"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" name="fecha" class="form-control" placeholder="Seleccione una fecha">
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <input type="text" name="mensaje" class="form-control" placeholder="Ingrese mensaje">
                        </div>

                        <input type="hidden" name="municipalidad_id" value="1">

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
