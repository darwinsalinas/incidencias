<?php

namespace App\Http\Controllers;

use App\Entidad;
use Illuminate\Http\Request;
use App\Sexo;
use App\Http\Requests\StoreEntidad;
use App\Perfil;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Perfil::with([
            'sexo',
            'entidad'
        ])->get();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('entidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntidad $request)
    {
        $data = $request->validated();
        $entidad = new  Entidad();
        $entidad->entidad = $data['entidad'];
        $entidad->save();
        return $entidad;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function show(Entidad $entidad, $id)
    {
        $registroEncontrado = Entidad::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidad $entidad)
    {
        return view('entidades/editar', ['entidad' => $entidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidad $entidad)
    {
        $entidad->entidad = $request['entidad'];
        $entidad->save();
        return redirect('entidades/list');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidad $entidad)
    {
        $entidad->delete();
        return redirect('entidades/list');
    }

    public function list(Request $request)
    {
        $rs = $this->index();
        return view('entidades/lista', ['rs' => $rs]);
    }

}
