<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\User;
use Spatie\Permission\Models\Role;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Permission::all();
        return view('permisos.lista', compact('rs'));
    }

    /**
     * Show the form for creating a new resource.
     *'
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string'
        ]);

        $model = Permission::create($data);

        return redirect()->route('permisos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permiso)
    {
        // $user = auth()->user()->assignRole($role->name);
        // $role->givePermissionTo('Registrar Estudiante');
        $users = User::permission($permiso->name)->get();
        $roles = $permiso->roles()->get();
        return view('permisos.show', compact('permiso', 'users', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Permission::findOrFail($id);
        return view('permisos.edit', ['model' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string'
        ]);
        $model = Permission::findOrFail($id);
        $model->name = $data['name'];
        $model->save();
        return redirect()->route('permisos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Permission::findOrFail($id);
        $model->delete();
        return redirect()->route('permisos.index');
    }

    public function deleteRole(Role $role, Permission $permission)
    {
        $permission->removeRole($role);
        return redirect()->route('permisos.show', $permission->id);
    }
}
