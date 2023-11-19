@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>Registro Evento</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="/evento/agregar">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" name="fecha" class="form-control" placeholder="Seleccione una fecha">
                        </div>

                        <div class="form-group">
                            <label for="lugar">Lugar:</label>
                            <input type="text" name="lugar" class="form-control" placeholder="Ingrese lugar">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea name="descripcion" class="form-control" placeholder="Ingrese descripción"></textarea>
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
