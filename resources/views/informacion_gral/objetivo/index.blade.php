@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center rounded-top" >
            <div class="col-sm-12">
                <div class="card  mt-2 rounded-top">
                    <div class="card-header">
                        <h2>Lista de usuarios
                            <a href="objetivo/create"><button type="button" class="btn btn-success float-right">Agregar objetivo</button></a> </h2>

                    </div>
                    <table class="table table-hover table-light" >
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Objetivo</th>
                            <th scope="col">Misión</th>
                            <th scope="col">Visión</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($objetivogral as $objetivo)
                            <tr>
                                <th scope="row">{{$objetivo->id}}</th>
                                <td>{{$objetivo->objetivo}}</td>
                                <td>{{$objetivo->mision}}</td>
                                <td>{{$objetivo->vision}}</td>
                                <td>
                                    <form action="{{route('objetivo.destroy', $objetivo->id)}}" method="POST">
                                        <a href="{{route('objetivo.show', $objetivo->id)}}"><button type="button" class="btn btn-secondary mt-1">Ver</button></a>
                                        <a href="{{route('objetivo.edit', $objetivo->id) }}"><button type="button" class="btn btn-primary mt-1">Modificar</button></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-1">Eliminar</button>
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
