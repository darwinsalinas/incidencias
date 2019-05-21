
@extends('layouts.estilos')

@section('content')

<form action="{{route('roles.update', $model)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar cargo</legend>
  </div>
    @include('roles.fields', ['model' => $model])
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


