@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Perfil egreso : {{$perfilegreso->id}} </h1>
            <h2 >Objetivo general</h2>
            <p class="lead">{{$perfilegreso->perfil}}</p>

        </div>
    </div>

@endsection
