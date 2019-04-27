
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<form action="{{route('permisos.store')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar un Permiso</legend>

        @include('permisos.fields')

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
