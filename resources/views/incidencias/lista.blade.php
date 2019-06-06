@extends('layouts.estilos')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Reportes de incidencias</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Módulo</th>
                                <th>Tipo</th>
                                <th>Usuario</th>
                                <th class="text-right">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rs as $item)
                            <tr>
                                <td>{{$item->titulo}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->modulo->modulo}}</td>
                                <td>{{$item->tipo->tipo}}</td>
                                <td class="text-right">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('incidencias.show', $item->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        <a href="{{route('incidencias.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i></a>

                                            <a href="{{route('incidencias.edit',$item)}}" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="{{route('incidencias.destroy',$item)}}" method="POST" class="btn-group" role="form" id="delete_form_{{$item->id}}">
                                            @csrf()
                                            @method('DELETE')
                                            <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </form>
                                    </div>
                                </td>
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
