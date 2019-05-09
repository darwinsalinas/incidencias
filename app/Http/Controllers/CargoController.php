<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $qs = Cargo::latest()->paginate(5);

        // return view('cargos.lista', compact('cargos'))
        //     ->with('i', (request()->input('page', 1) -1) * 5);

        $qs = Cargo::all();
        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cargo = new  Cargo();
        $cargo->cargo = $request['cargo'];
        $cargo->save();
        return redirect('cargos/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = new  Cargo();
        $cargo->cargo = $request['cargo'];
        $cargo->save();
        return $cargo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo, $id)
    {
        $registroEncontrado = Cargo::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos/editar', ['cargo' => $cargo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $cargo->cargo = $request['cargo'];
        $cargo->save();
        return redirect('cargos/list');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect('cargos/list');
    }

    public function list()
    {
        
        $rs = $this->index();
        return view('cargos/lista', ['rs' => $rs]);
    }

}
