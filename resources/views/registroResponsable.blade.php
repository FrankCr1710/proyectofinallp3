@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>Registro Responsable</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="/responsable/agregar">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Ingrese apellido">
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" name="telefono" class="form-control" placeholder="Ingrese teléfono">
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="text" name="correo" class="form-control" placeholder="Ingrese correo">
                        </div>

                        <div class="form-group">
                            <label for="cargo">Cargo:</label>
                            <input type="text" name="cargo" class="form-control" placeholder="Ingrese cargo">
                        </div>

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
