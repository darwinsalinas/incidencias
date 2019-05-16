<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiPerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perfil = auth()->user()->perfil;
        $perfil->load([
            'sexo',
            'cargo',
            'entidad',
            'user'
        ]);
        //dd($perfil);
        return view('perfil', compact('perfil'));
    }
}
