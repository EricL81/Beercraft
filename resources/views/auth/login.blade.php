@extends('layouts.app')
@section('content')
<section id="form" class="book-a-table">
    <div class="container">
        <div class="section-title">
            <h2>Haz Login a <span>Beercraft</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/login" method="POST" role="form" class="php-email-form">
        @csrf
            <div class="row">
                <div class="col-lg-6 offset-md-3 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-6 offset-md-3 form-group mt-3 mt-md-0">
                    <input type="password" class="form-control" name="password" id="email" placeholder="Your Password" data-rule="password" data-msg="Please enter a valid password">
                    <div class="validate"></div>
                </div>
                <!-- <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre Cerveceria" data-rule="minlen:3" data-msg="Please enter at least 3 characters">
                    <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" class="form-control" name="capacity" id="capacity" placeholder="# de personas" data-rule="minlen:1" data-msg="Please enter at least 1 character">
                    <div class="validate"></div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="description" rows="5" id="description" placeholder="Descripción"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div> -->
                <div class="text-center"><button type="submit">Enviar</button></div>
            </div>
        </form>
    </div>
</section>
@endsection