@extends('layouts.estilos')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><strong>Rol: </strong>{{$role->name}}</h5>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Usuarios</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Usuarios</th>
                            <th class="text-right">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td scope="row">{{$user->name}}</td>
                            <td class="text-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('usuarios.show', $user->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    <form action="{{route('usuarios.destroy',$user)}}" method="POST" class="btn-group" role="form" id="delete_form_{{$user->id}}">
                                        @csrf()
                                        @method('DELETE')
                                        <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$user->id}}').submit();" class="btn btn-danger">
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>Permisos</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Permisos</th>
                            <th class="text-right">Opciones</th>
                        </tr>
                    </thead>permiso
                    <tbody>
                        @foreach($permisos as $permiso)
                        <tr>
                            <td scope="row">{{$permiso->name}}</td>
                            <td class="text-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('permisos.show', $permiso->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    <form action="{{route('permisos.delete.role',[$role,$permiso])}}" method="POST" class="btn-group" role="form" id="delete_form_{{$permiso->id}}">
                                        @csrf()
                                        @method('DELETE')
                                        <button type="submit" value="borrar" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                        </button>
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
@endsection
