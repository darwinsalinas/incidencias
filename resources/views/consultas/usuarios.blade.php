@extends('layouts.estilos')

@section('content')

<div class="card">
    <div class="card-header">
        Consultas de usuarios
    </div>
    <div class="card-body">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Escriba el nombre" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Correo</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Escriba el correo" aria-describedby="helpId">
            </div>

            <div class="btn-group float-right" role="group" aria-label="">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>

    @if($rs->isNotEmpty())
    <div class="card-footer">
        <table class="table">
            <thead>
                <tr>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rs as $user)
                    <tr>
                        <td scope="row">{{$user->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

</div>

@endsection
