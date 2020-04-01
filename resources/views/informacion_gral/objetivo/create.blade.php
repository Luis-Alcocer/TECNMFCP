@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-sm-8 ">
                <div class="card">
                    <div class="card-header"> Registro de objetivos</div>
                    <div class="card-body">

                        <form action="/informacion_gral/objetivo" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="objetivo">Objetivo</label>
                                <textarea rows="3" type="text" class="form-control" name="objetivo"  placeholder="Ingrese objetivo">
                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label for="mision">Misión</label>
                                <textarea rows="3" type="text" class="form-control" name="mision"  placeholder="Ingrese misión">
                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label for="vision">Visión</label>
                                <textarea  rows="3" type="text" class="form-control" name="vision"  placeholder="Ingrese visión">
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
