@php
    if(!isset($model)){
        $model = null;
    }
@endphp
<div class="form-group">
    <label for="">Permiso</label>
    <input value="{{$model ? $model->name : ''}}" name="name" type="text" class="form-control" placeholder="Escriba el nombre del rol">
</div>
