@extends('layouts.estilos')

@section('content')

@include('componentes.errores')



<div class="row"></div>
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h2>Reportar incidencia</h2>
            </div>
            <div class="card-body">
                <form action="{{route('incidencias.store')}}" method="POST" role="form">
                    @csrf()
                    @include('incidencias.fields')
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
