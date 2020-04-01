<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Description;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', ['users' => $usuarios]);
    }

    public function create()
    {
       return view('usuarios.create');
    }


    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->name = request('nombre');
        $usuario->email= request('email');
        $usuario->password = request('contraseña');
        $usuario->save();

        return redirect('/usuarios');
    }


    public function show($id)
    {
        return view('usuarios.show', ['user' =>User::findOrFail($id)]);

    }

    public function edit($id)
    {
        return view('usuarios.edit', ['user' =>User::findOrFail($id)]);
    }


    public function update(UserFormRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name = $request ->get('nombre');
        $usuario->email= $request -> get('email');
        $usuario->update();

        return redirect('/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario ->delete();
        return redirect('/usuarios');
    }
}
