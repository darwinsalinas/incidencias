
@extends('layouts.estilos')

@section('content')

<form action="{{route('permisos.update', $model)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar cargo</legend>
  </div>
    @include('permisos.fields', ['model' => $model])
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


