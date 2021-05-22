@extends('layouts.app')
@section('content')


<section id="chefs" class="chefs">

<div class="container py-3">
    <h1 class="text-center text-warning mt-5 pt-5">Descubre nuestras cervezas mas famosas !</h1>

        <div class="row">
        @forelse($beers as $beer)
            <div class="col-12 col-md-3 py-5">
                <div class="card  border-warning h-100 text-white" style="width: 18rem; background: rgba(65, 59, 54, 0.85);">
                <img src="/img/beer.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h2 class="card-title text-warning">{{$beer->name}}</h2>
                        <div class="card-text">
                            <h5>Descripción: </h5>
                            <p>{{$beer->description}}</p>
                            <h5>Precio: {{$beer->price}}</h5>
                        </div>
                        <a href="#" class="btn btn-primary">Saber mas</a>

                    </div>
                </div>
            </div>
            @empty
            <h2>Se bebieron todas las cervezas, te vas a morir de sed....</h2>
            @endforelse        
        </div>
</div>
</section>
@endsection
