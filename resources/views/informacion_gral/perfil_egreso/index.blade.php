@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center rounded-top" >
            <div class="col-sm-11">
                <div class="card  mt-2 rounded-top">
                    <div class="card-header">
                        <h2>Perfil Egreso
                            <a href="perfil_egreso/create"><button type="button" class="btn btn-success float-right">Agregar perfil egreso</button></a> </h2>
                    </div>
                    <table class="table table-hover table-light" >
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" style="width: 600px">Perfil</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($perfilegreso as $egreso)
                            <tr>
                                <th scope="row" >{{$egreso->id}}</th>
                                <td>{{$egreso->perfil}}</td>
                                <td>
                                    <form action="{{route('perfil_egreso.destroy', $egreso->id)}}" method="POST">
                                        <a href="{{route('perfil_egreso.show', $egreso->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                                        <a href="{{route('perfil_egreso.edit', $egreso->id) }}"><button type="button" class="btn btn-primary">Modificar</button></a>
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
