@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                <div class="card">
                    <div class="card-header"> Actualizar objetivos</div>
                    <div class="card-body">
                        <form action="{{route('objetivo.update' , $objetivo->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="objetivo">Objetivo {{$objetivo->id}}</label>
                                <textarea rows="3" type="text" class="form-control  align-text-bottom" name="objetivo"   placeholder="Ingrese objetivo">{{$objetivo ->objetivo}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="mision">Misión</label>
                                <textarea rows="3" type="text" class="form-control" name="mision"  placeholder="Ingrese misión">{{$objetivo ->mision}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="vision">Visión</label>
                                <textarea  rows="3" type="text" class="form-control" name="vision" placeholder="Ingrese visión">{{$objetivo ->vision}}</textarea>
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
