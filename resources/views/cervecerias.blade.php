@extends('layouts.app')

@push('css')

<style>

h1 {
    color: red;
    text-align: center;
}

</style>

@endpush

@section('content')

<h1>Descubre nuestras Cervecerias locales !</h1>


    <div class="container py-3">
        <div class="row">
        @foreach($breweries as $brewery)
            <div class="col-12 col-md-3 py-5">
                <div class="card" style="width: 18rem; height:auto;">
                <img src="{{$brewery['foto']}}" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h2 class="card-title">{{$brewery['nombre']}}</h2>
                        <div class="card-text">
                        <h3>Descripción</h3>
                        <p>{{$brewery['desc']}}</p>
                        <h4>Aforo: {{$brewery['aforo']}}</h4>
                        <a href="#" class="btn btn-primary">Cerve-zas !!</a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach          
        </div>
    </div>

    

@endsection