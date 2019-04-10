
@extends('layouts.estilos')

@section('content')


<div class="row mt40">

<a href="{{ url('') }}" type="button" class="btn btn-warning">Regresar</a>
    <div class="card-header bg-info">
    Lista de Cargos
  </div>
    <table class="table table-bordered" id="laravel_crud">
        <thead>
            <tr>
                <th>Cargo</th>
                <th>Fecha creada</th>
                <th>Fecha actualizado</th>
               <th colspan="2"> <center>Opciones </center></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
        <tr>
            <td>{{$item->cargo}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
                <td>
                <a href="/cargos/create" class="btn btn-success">Agregar</a>
                <a href="/cargos/edit/{{$item->id}}" class="btn btn-primary">Editar</a>
                <form action="{{url('cargos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
               </td>
               <td>
                @csrf()
                @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
