<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{url('entidades', $entidad->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Agregar entidad</legend>
        <div class="form-group">
            <label for="">Nombre de la entidad</label>
            <input value="{{$entidad->entidad}}" name="entidad" type="text" class="form-control" id="entidad" placeholder="Input field">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

//editando el editar del editor del editar

</body>
</html>
