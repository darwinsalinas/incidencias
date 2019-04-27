@extends('layouts.estilos')

@section('content')
<h4><strong>Permiso: </strong>{{$permiso->name}}</h4>
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
                    <div class="btn-group">
                        <form action="{{route('permisos.delete.role',[$permiso->id, $rol->id])}}" method="POST" role="form" id="delete_form_{{$rol->id}}">
                            @csrf()
                            @method('DELETE')
                            <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$rol->id}}').submit();" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </form>
                    </div>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


