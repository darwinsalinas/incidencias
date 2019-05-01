@extends('layouts.estilos')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><strong>Permiso:</strong> {{$permiso->name}}</h5>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td scope="row">{{$user->name}}</td>
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
                <h5>Roles</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Roles</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $rol)
                        <tr>
                            <td scope="row">{{$rol->name}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('roles.show', $rol->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('roles.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i></a>
                                    <a href="{{route('roles.edit',$rol)}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <form class="btn-group" action="{{route('permisos.delete.role',[$rol,$permiso])}}" method="POST" role="form" id="delete_form_{{$rol->id}}">
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
