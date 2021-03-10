<!-- ======= Top Bar ======= -->
<!-- <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section> -->

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="{{route('home')}}">Beercraft</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>



      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            <a class="nav-link scrollto active {{request()->routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li>
            <a class="nav-link scrollto {{request()->routeIs('cervecerias') ? 'active' : ''}}" href="{{route('cervecerias')}}">Cervecerias</a>
          </li>
          <li>
            <a class="nav-link scrollto {{request()->routeIs('cerveza') ? 'active' : ''}}" href="{{route('cerveza')}}">Cervezas</a>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Perfil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @guest
              {{-- si no estoy conectado --}}
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
              @endguest

              @auth
              {{-- si estoy conectado --}}
              <li><a href="#">Hola {{Auth::user()->name}}</a></li>
              <li>
                <a id="logout" href="#">Logout</a>
                <form id="form-logout" action="/logout" method="POST">
                @csrf
                </form>
              </li>
              @endauth

            </ul>
          </li>
        </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

      </nav>{{-- .navbar --}}
      <a href="{{('/#form')}}" class="book-a-table-btn scrollto">Crear Cerveceria</a>

    </div>
</header>
{{-- End Header --}}

