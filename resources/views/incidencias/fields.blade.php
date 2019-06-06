@php
    if(!isset($model)){
        $model = null;
    }
@endphp
<div class="form-group">
    <label for="">Módulo</label>
    <select class="form-control" name="modulo_id">
        @foreach($modulos as $item)
            <option value="{{$item->id}}">{{$item->modulo}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Tipo de incidencia</label>
    <select class="form-control" name="tipo_incidencia_id">
        @foreach($tipos as $item)
            <option value="{{$item->id}}">{{$item->tipo}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Título</label>
    <input value="{{$model ? $model->titulo : ''}}" name="titulo" type="text" class="form-control" placeholder="Escriba el título">
</div>

<div class="form-group">
    <label for="">Descripción</label>
    <textarea value="{{$model ? $model->descripcion : ''}}" name="descripcion" type="text" class="form-control" placeholder="Escriba la descripción"></textarea>
</div>

