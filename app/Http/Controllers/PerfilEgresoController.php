<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\ObjetivosGral;
use App\PerfilEgreso;
use Illuminate\Http\Request;

class PerfilEgresoController extends Controller
{

    public function index()
    {
        $egreso = PerfilEgreso::all();
        return view('informacion_gral.perfil_egreso.index', ['perfilegreso' => $egreso]);
    }

    public function create()
    {
        return view('informacion_gral.perfil_egreso.create');
    }

    public function store(Request $request)
    {
        $egreso = new PerfilEgreso();
        $egreso->perfil = request('perfil');
        $egreso->save();

        return redirect('/informacion_gral/perfil_egreso');


    }
    public function show($id)
    {
        return view('informacion_gral.perfil_egreso.show', ['perfilegreso' =>PerfilEgreso::findOrFail($id)]);

    }

    public function edit($id)
    {

    }

    public function update(UserFormRequest $request, $id)
    {



    }


    public function destroy($id)
    {
        $egreso = PerfilEgreso::findOrFail($id);
        $egreso ->delete();
        return redirect('/informacion_gral/perfil_egreso');

    }
}
