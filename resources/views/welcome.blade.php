@extends('layouts.estilos')

@section('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  Sistema De Incidencias
                </div>


               <!-- <img src="{{asset('asset/SDI.jpg')}}"> -->
                <!-- <img src="asset/SDI.jpg" class="rounded mx-auto d-block" alt="Responsive image"> -->

                <div class="links">
                    <a href="entidades/list">Entidades Editada Carlos</a>
                    <a href="cargos/list">Cargos</a>
                    <a href="modulos/list">Módulos</a>
                    <a href="sexos/list">Sexos</a>
                    <a href="tipoIncidencias/list">Tipo de Incidencias</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@endsection
