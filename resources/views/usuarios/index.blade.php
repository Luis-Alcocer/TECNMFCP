@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center rounded-top" >
            <div class="col-sm-11">
                <div class="card  mt-2 rounded-top">
                    <div class="card-header">
                        <h2>Lista de usuarios
                            <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar usuario</button></a> </h2>
                    </div>
    <table class="table table-hover table-light" >
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $usuario)
        <tr>
            <th scope="row">{{$usuario->id}}</th>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>
                 <form action="{{route('usuarios.destroy', $usuario->id)}}" method="POST">
                     <a href="{{route('usuarios.show', $usuario->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                     <a href="{{route('usuarios.edit', $usuario->id) }}"><button type="button" class="btn btn-primary">Modificar</button></a>
                     @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>

            </td>
        </tr>
         @endforeach

        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
