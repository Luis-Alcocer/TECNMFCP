@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 ">
            <div class="card">
                <div class="card-header"> Registro de usuarios</div>
                    <div class="card-body">

                        <form action="/usuarios" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="nombre"  placeholder="Ingrese el nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email"  placeholder="Ingrese correo">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="contraseña" placeholder="Ingrese contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
