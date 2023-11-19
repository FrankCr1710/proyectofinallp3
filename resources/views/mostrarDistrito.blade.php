@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">

        @if(isset($mensaje))
            <div class="alert alert-success mt-3">
                {{ $mensaje }}
            </div>
        @endif

        @if(isset($distritos) && count($distritos) > 0)
            <h2>Distritos Guardados</h2>
            <ul>
                @foreach($distritos as $distrito)
                    <li>
                        {{ $distrito->nombre }}
                        <form method="post" action="{{ route('distrito.eliminar', $distrito->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No hay distritos guardados aún.</p>
        @endif
    </div>
</div>
@endsection
