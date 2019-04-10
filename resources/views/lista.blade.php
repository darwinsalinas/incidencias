@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Entidad</th>
                <th>opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
                <tr>
                    <td>{{$item->entidad}}</td>
                    <td>
                        <a href="/entidades/edit/{{$item->id}}">Editar</a>
                        <form action="{{url('entidades', $item->id)}}"  method="POST" role="form" id="delete_form_{{$item->id}}">
                            @csrf()
                            @method('DELETE')
                            <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                        </form>
                    </td>
                </tr>

            <h1> JHOSELL ESTUVO AQUI </h1>
            <h1> JHOSELL CREO NUEVA RAMA </h1>

            @endforeach
        </tbody>
    </table>
@endsection
