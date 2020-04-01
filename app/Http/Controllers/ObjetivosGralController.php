<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\ObjetivosGral;

use Illuminate\Http\Request;

class ObjetivosGralController extends Controller
{

    public function index()
    {
        $objetivo = ObjetivosGral::all();
        return view('informacion_gral.objetivo.index', ['objetivogral' => $objetivo]);
    }

    public function create()
    {
        return view('informacion_gral.objetivo.create');
    }


    public function store(Request $request){
        $objetivo = new ObjetivosGral();
        $objetivo->objetivo = request('objetivo');
        $objetivo->mision = request('mision');
        $objetivo->vision = request('vision');
        $objetivo->save();
        return redirect('/informacion_gral/objetivo');


    }
    public function show($id)
    {
        return view('informacion_gral.objetivo.show', ['objetivo' =>ObjetivosGral::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('informacion_gral.objetivo.edit', ['objetivo' =>ObjetivosGral::findOrFail($id)]);
    }

    public function update(UserFormRequest $request, $id)
    {


        $objetivo = ObjetivosGral::findOrFail($id);
        $objetivo->objetivo = $request ->get('objetivo');
        $objetivo->mision = $request ->get('mision');
        $objetivo->vision = $request -> get('vision');
        $objetivo->update();
        return redirect('/informacion_gral/objetivo');

    }


    public function destroy($id)
    {
        $objetivo = ObjetivosGral::findOrFail($id);
        $objetivo ->delete();
        return redirect('/informacion_gral/objetivo');
    }
}
