<!DOCTYPE html>
<html lang="en">

<head>

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid blue;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid red;
}

</style>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<body>
<table  id="customers">
<thead>
    <tr>
    <th>Entidad</th>
    <th>Opciones</th>
    </tr>
</thead>
<tbody>
@foreach ($rs as $item)
<tr>
    <td>{{$item->entidad}}</td>

    <td>
   <a href="/entidades/edit/{{$item->id}}"><button type="button" class="button button1">Editar </a></button>

<form action="{{url('entidades', $item->id)}}"  method= "POST" role="form" id="delete_form_{{$item->id}}">


    @csrf()
     @method('DELETE')

     <a href= "javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">
     <button type=".button" class="button button2">Eliminar</button></a>

</form>

   </td>
</tr>
@endforeach

</tbody>
</table>
</body>
</html>

