@extends('layouts.estilos')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="card text-white">
            <img class="card-img-top" src="img/banner.jpg" alt="Card image cap">
            <div class="card-img-overlay">
                <h2 class="card-title">Sistema de incidencias</h2>
                <p class="card-text">Sistema de de reporte de incidencias desarrollado en Laravel</p>
                <p class="card-text">Última actualización hace 3 min.</p>
                <a href="{{route('incidencias.create')}}" class="btn btn-secondary">Reportar Incidencia</a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="card text-white">
            <img class="card-img-top" src="img/banner2.jpg" alt="Card image cap">
            <div class="card-img-overlay">
                <h2 class="card-title">Últimas incidencias</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Módulo</th>
                                <th>Tipo</th>
                                <th>Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rs as $item)
                            <tr>
                                <td scope="row">{{$item->titulo}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->modulo->modulo}}</td>
                                <td>{{$item->tipo->tipo}}</td>
                                <td>{{$item->user->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
