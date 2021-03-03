@extends('layouts.app')



@section('content')

<h1>Descubre nuestras cervezas mas famosas !</h1>


<div class="container py-3">
        <div class="row">
        @forelse($beers as $beer)
            <div class="col-12 col-md-3 py-5">
                <div class="card" style="width: 18rem;">
                <img src="{{$beer['foto']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">{{$beer['nombre']}}</h2>
                        <div class="card-text">
                        <h5>Origin: {{$beer['origin']}}</h5>
                        <h5>Color: {{$beer['color']}}</h5>
                        <h5>Grados: {{$beer['grados']}}</h5>
                        <a href="#" class="btn btn-primary">Saber mas</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h2>Se bebieron todas las cervezas, te vas a morir de sed....</h2>
            @endforelse        
        </div>
</div>
@endsection

@push('js')

<script>
alert("Tienes sed ?? Mira que tenemos aqui... ;)");
</script>

@endpush