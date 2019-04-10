
@extends('layouts.estilos')

@section('content')

<form action="{{url('modulos', $modulo->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar MODULO</legend>
  </div>
    <div class="form-group">
        <label for="">Nombre del módulo</label>
        <input value="{{$modulo->modulo}}" name="modulo" type="text" class="form-control" id="modulo" placeholder="Escriba el nuevo nombre del módulo">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


