@extends('layouts.estilos')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                 <h4><strong>Rol: </strong>{{$role->name}}</h4>
            </div>

        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                 <h4>Usuarios</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                             <th>Usuarios</th>
                                <th class="text-right">
                                 Usuarios
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                                @foreach($users as $user)
                                <tr>
                                <td scope="row">{{$user->name}}</td>
                                </tr>
                                @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>




    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                 <h4>Permisos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                             <th>Permisos</th>
                                <th class="text-right">
                                 Opciones
                                </th>
                            </tr>
                        </thead>

                            <tbody>
                                @foreach($permisos as $permiso)
                                 <tr>
                                 <td scope="row">{{$permiso->name}}</td>
                                </tr>
                                  @endforeach


                             </tbody>


                            </table>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



    @endsection
