@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>Registro Comunicación</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="/comunicacion/agregar">
                        @csrf

                        <div class="form-group">
                            <label for="asunto">Asunto:</label>
                            <input type="text" name="asunto" class="form-control" placeholder="Ingrese asunto">
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <textarea name="mensaje" class="form-control" placeholder="Ingrese mensaje"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" name="fecha" class="form-control" placeholder="Seleccione una fecha">
                        </div>

                        <input type="hidden" name="municipalidad_id" value="1">
                        <input type="hidden" name="responsable_id" value="1">

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
