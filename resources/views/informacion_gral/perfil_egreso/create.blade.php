@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                <div class="card">
                    <div class="card-header"> Registro de perfil</div>
                    <div class="card-body">

                        <form action="/informacion_gral/perfil_egreso" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="perfil">Perfil</label>
                                <textarea rows="3" type="text" class="form-control" name="perfil"  placeholder="Ingrese perfil">
                                    </textarea>
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
