@extends('layouts.estilos')

@section('content')
<h4><strong>Rol: </strong>{{$role->name}}</h4>
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
            <th>Permisos</th>
        </tr>
    </thead>
    <tbody>
        @foreach($permisos as $permiso)
        <tr>
            <td scope="row">{{$permiso->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


