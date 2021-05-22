@extends('layouts.app')
@section('content') 
@include('layouts._gallery')
@include('layouts._beers-menu')
@auth    
@if(auth()->id() == $brewery->user_id)
    <!-- ======= Modificar una Cerveceria ======= -->
    <section id="form" class="book-a-table">
        <div class="container">
            <div class="section-title">
                <h2>Modifica esta <span>Cerveceria</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <form action="{{route('cervecerias.update',['id'=>$brewery->id])}}" method="POST" role="form" class="php-email-form">
            @method('PUT')
            @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre Cerveceria" data-rule="minlen:3" data-msg="Please enter at least 3 characters" value="{{$brewery->name}}">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="number" class="form-control" name="capacity" id="capacity" placeholder="# de personas" data-rule="minlen:1" data-msg="Please enter at least 1 character" value="{{$brewery->capacity}}">
                        <div class="validate"></div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="description" rows="5" id="description" placeholder="Descripción">{{$brewery->description}}</textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group mt-3">
                    <label for="">Selecciona las cervezas que se venden:</label>
                    <select class="form-select" multiple aria-label="multiple select example" name='beers[]'>
                        @foreach($beers as $beer)

                        <option 
                        @foreach($brewery->beers as $mybeer)
                            @if($beer->id == $mybeer->id)
                                selected
                            @endif
                        @endforeach                 
                        value="{{$beer->id}}">{{$beer->name}}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Guardar cambios</button></div>
                </div>
            </form>
            <form action="{{route('cervecerias.delete',['id'=>$brewery->id])}}" method="POST" role="form" class="php-email-form">
            @csrf 
            @method('DELETE')
            <div class="text-center"><button type="submit">Borrar Cerveceria</button></div>
            </form>


        </div>
    </section>
@endif
@endauth
@include('layouts._reviews')
@endsection