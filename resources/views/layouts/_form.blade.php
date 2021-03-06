<div class="container" id="form">
    <div class="row text-center justify-content-around">
        <div class="col-12 col-md-6 col-lg-4">
            <h2>Añade una nueva <span class="text-warning">Cerveceria</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, consectetur. Ipsam in doloribus obcaecati quidem.</p>
        </div>
    </div>

    <form action="/cervecerias" method="POST">
    @csrf
        <div class="row shadow rounded-3 border border-white py-3 px-2 my-3">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre cerveceria" data-rule="minlen:3" data-msg="Please enter at least 3 characters">
                <div class="validate"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="capacity" class="form-label">Aforo</label>
                <input type="number" class="form-control" name="capacity" id="capacity" placeholder="# de personas" data-rule="minlen:1" data-msg="Please enter at least ! character">
                <div class="validate"></div>
            </div>
            <div class="col-md-12  mb-3" style="height:200px;">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control shadow-sm" type="text" name="description" rows="5" id="description" placeholder="Describe un poco el local"></textarea>
            </div>
            <div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

