@extends('layouts.app')



@section('content')

<h1 class="text-center mt-4 text-warning">Descubre nuestras Cervecerias locales !</h1>


<div class="container py-3">
        <div class="row">
            @foreach ($breweries as $brewery)
            <div class="col-12 col-md-6 col-lg-3  py-5">
                <div class="card bg-transparent border-warning " style="width: 18rem; height: 46rem;">
                <img src="css/cerveceria.jpg" class="card-img-top" alt="...">
                    <div class="card-body border-warning text-muted d-flex flex-column justify-content-between">
                        <h3 class="card-title text-warning">{{$brewery->name}}</h3>
                        <div class="text-white">
                            <h5>Descripción</h5>
                            {{$brewery->description}}
                        </div>
                        <div class="text-white">
                            <h4>Aforo: {{$brewery->capacity}}</h4>
                            <a href="#" class="btn btn-primary">Cerve-zas !!</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    

@endsection