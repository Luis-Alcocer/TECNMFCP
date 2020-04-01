@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Objetivo</h1>
            <h2 >Objetivo general</h2>
            <p class="lead">{{$objetivo->objetivo}}</p>
            <h2 >Misión</h2>
            <p class="lead">{{$objetivo->mision}}</p>
            <h2 >Visión</h2>
            <p class="lead">{{$objetivo->vision}}</p>
        </div>
    </div>

@endsection
