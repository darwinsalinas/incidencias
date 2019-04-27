
@extends('layouts.estilos')

@section('content')


<div class="row mt40">

<a href="{{ url('') }}" type="button" class="btn btn-warning">Regresar</a>
    <div class="card-header bg-info">
    Lista de Permisos
  </div>
    <table class="table table-bordered" id="laravel_crud">
        <thead>
            <tr>
                <th>Rol</th>
               <th colspan="2"> <center>Opciones </center></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route('permisos.show', $item->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                <a href="{{route('permisos.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i></a>
                <a href="{{route('permisos.edit',$item)}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                <div class="btn-group">
                    <form action="{{route('permisos.destroy',$item)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                        @csrf()
                        @method('DELETE')
                        <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger">
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
</div>
@endsection
