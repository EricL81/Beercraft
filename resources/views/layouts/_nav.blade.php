<nav class="navbar navbar-expand-lg navbar-dark bg-gradient my-navbar">
  <div class="container-fluid ">
    <a class="navbar-brand" href="{{route('home')}}">Beercraft</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cervecerias')}}">Cervecerias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cerveceria')}}">Cervezas</a>
        </li>
        <li class="nav-item">
          <a type="button" class="btn btn-outline-warning" href="{{('#form')}}">Añadir Cerveceria</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
