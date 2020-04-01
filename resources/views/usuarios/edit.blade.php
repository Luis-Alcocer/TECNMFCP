@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                <div class="card">
                    <div class="card-header"> Registro de usuarios</div>
                    <div class="card-body">
                        <h3>Editar usuario : {{$user->name}}</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('usuarios.update' , $user->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="{{$user ->name}}" placeholder="Ingrese el nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email"  value="{{$user ->email}}" placeholder="Ingrese correo">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
