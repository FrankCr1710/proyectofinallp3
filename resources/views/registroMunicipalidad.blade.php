@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>Registro Municipalidad</h1>
                </div>
                <div class="card-body">
                    <img src="{{ asset('https://e7.pngegg.com/pngimages/400/527/png-clipart-neighbourhood-free-content-community-directions-s-website-map.png') }}" alt="Distrito" class="img-fluid mb-3" style="width: 200px; height:100px ;">
                    <form method="post" action="/municipalidad/agregar">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
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
