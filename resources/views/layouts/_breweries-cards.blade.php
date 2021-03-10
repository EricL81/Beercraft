 <!-- ======= Chefs Section ======= -->
 <section id="chefs" class="chefs">
    <div class="container">

        <div class="section-title">
            <h2>Todas nuestras <span>Cervecerias</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
            @foreach ($breweries as $brewery)
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="/img/chefs/cerveceria-1.jpg" class="img-fluid" alt="..."></div>
                    <div class="member-info">
                        <h4><a href="{{route('cerveceria',['id'=>$brewery->id])}}">{{$brewery->name}}</a></h4>
                        <span>{{$brewery->user->name}}</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section><!-- End Chefs Section -->








