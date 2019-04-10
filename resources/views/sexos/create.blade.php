
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<h2>SEXOS</h2>
<form action="{{url('sexos/lista')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar sexo</legend>

        <div class="form-group">
            <label for="">Digite el Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Escriba el sexo">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
