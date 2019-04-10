
@extends('layouts.estilos')

@section('content')


<div class="row mt40">

<a href="{{ url('') }}" type="button" class="btn btn-warning">Regresar</a>
    <div class="card-header bg-info">
    <h1> Lista de sexo </h1>
  </div>
    <table class="table table-bordered" id="laravel_crud">
        <thead>
            <tr>
                <th>Sexo</th>
                <th>Fecha creada</th>
                <th>Fecha actualizado</th>
               <th colspan="2"> <center>Opciones </center></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
        <tr>
            <td>{{$item->sexo}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
                <td>
                <a href="/sexos/create" class="btn btn-success">Agregar</a>
                <a href="/sexos/edit/{{$item->id}}" class="btn btn-primary">Editar</a>
                <form action="{{url('sexos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
               </td>
               <td>
                @csrf()
                @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
