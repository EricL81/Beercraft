<section id="form" class="book-a-table chefs">
    <div class="container">
        <div class="section-title">
            <h2>Agregar una nueva <span>Cerveceria</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="/cervecerias" method="POST" role="form" class="php-email-form">
        @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre Cerveceria" data-rule="minlen:3" data-msg="Please enter at least 3 characters">
                    <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="number" class="form-control" name="capacity" id="capacity" placeholder="# de personas" data-rule="minlen:1" data-msg="Please enter at least 1 character">
                    <div class="validate"></div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Selecciona las cervezas que se venden:</label>
                    <select class="form-select" multiple aria-label="multiple select example" name='beers[]'>
                        @foreach($beers as $beer)
                        <option value="{{$beer->id}}">{{$beer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Crear Cerveceria</button></div>
            </div>
        </form>
    </div>
</section>

