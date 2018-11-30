@extends('layouts.principal')
@section('content')


<!-- header end -->

<!-- Start Slider Area -->
<div id="home" class="slider-area">
  <div class="bend niceties preview-2">
    <div id="ensign-nivoslider" class="slides">
      <img src="/images/slider1.png" alt="" title="#slider-direction-1" />
      <img src="/images/slider2.png" alt="" title="#slider-direction-2" />
      <img src="/images/slider3.png" alt="" title="#slider-direction-3" />
    </div>

    <!-- direction 1 -->
    <div id="slider-direction-1" class="slider-direction slider-one">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content">
              <!-- layer 1 
              <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                <h2 class="title1" style="color:#000;">Contrata expertos para cualquier trabajo en línea. </h2>
              </div>-->
              <!-- layer 2 -->
              <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

                <h1 class="title2" style="color:#fff; text-align:left;">MILES DE <span style="color:#fff;">JOBERS</span></h1>

                <h1 style="color:#fff; text-align:left; margin-top:-10px;">DISPUESTOS A SOLUCIONAR TUS PROBLEMAS</h1>

              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="btn btn-primary" href="#services" style="border:none;">Ver Servicios</a>
                <a class="btn btn-primary" href="#about" style="border:none;">Leer más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- direction 2 -->
    <div id="slider-direction-2" class="slider-direction slider-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <!-- layer 1 
              <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <h2 class="title1">The Best Business Information </h2>
              </div>-->
              <!-- layer 2 -->
              <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1 class="title2" style="text-align:left;">ENCUENTRA TU <span style="color:#80E27E;">JOBER</span> IDEAL</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="btn btn-primary" href="#services" style="border:none;">Ver Servicios</a>
                <a class="btn btn-primary" href="#about" style="border:none;">Leer más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- direction 3 -->
    <div id="slider-direction-3" class="slider-direction slider-two">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content">
              <!-- layer 1 
              <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <h2 class="title1">The Best business Information </h2>
              </div>-->
              <!-- layer 2 -->
              <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1 class="title2">EMPIEZA A BUSCAR</h1>
              </div>
              <!-- layer 3 -->
              <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <a class="btn btn-primary" href="#services" style="border:none;">Ver Servicios</a>
                <a class="btn btn-primary" href="#about" style="border:none;">Leer más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Slider Area -->

<!-- End Service area -->

<!-- Inicio buscador-->
<div class="wellcome-area">
  <div class="well-bg" >
    <div class="test-overly" style="background-color:#80e27e; height:200px;" ></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="wellcome-text" >
            <div class="well-text text-left">
              <h2 style="color:#000; font-weight:bold;">DINOS LO QUE BUSCAS</h2>
              <div>
                <div class="suscribe-input">
                  <input style="color:#000; width:500px;" type="email" class="email form-control width-80" id="sus_email" placeholder="Buscar jober">
                  <img src="cdn/img/7.png" style="width:250px; position:absolute; top:60px; right:50px;"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin buscador-->

<!-- perfil -->
<div id="team" class="our-team-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Mejores Jober</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="team-top">
        @foreach ($jober as $j)
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="/img/usuario/{{$j->foto}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                     <i class="fa fa-facebook"></i>
                   </a>
                 </li>
                 <li>
                  <a href="#">
                   <i class="fa fa-twitter"></i>
                 </a>
               </li>
               <li>
                <a href="#">
                 <i class="fa fa-instagram"></i>
               </a>
             </li>
           </ul>
         </div>
       </div>
       <div class="team-content text-center">
        <h4>{{$j->nombre}} {{$j->apellido}}</h4>
        <p>{{$j->profesion}}</p>
        <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
        <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
        <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
        <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
        <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
        <a href="/perfil/empleado/{{$j->id}}"> <button class="btn-primary" id="button">Ver Perfil </button></a>
       
      </div>

    </div>

  </div>
  @endforeach
  <!-- End column -->
  

</div>
</div>
</div>
</div>

<!-- fin jober -->
<!-- inicio servicios -->
<section id="team" class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Servicios</h5>
    <div class="row">
      <!-- Servicios -->
      @foreach($oferta as $f)
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">          
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class=" img-fluid" src="/images/{{$f->imagen}}" alt="card image"></p>
                  <h4 class="card-title">{{$f->categoria}}</h4>
                  <p class="card-text">{{$f->empleado}}</p>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="far fa-star"></i></a>
                  </div>
                </div>
              </div>
              <div class="backside">
                <div class="card">
                  <div class="card-body text-center mt-4">
                    <p><img class=" img-fluid" src="/images/{{$f->imagen}}" alt="card image"></p>
                    <h4 class="card-title"><b>{{$f->nombre}}</b></h4>
                    <h4 class="card-title"><b>{{$f->empleado}}</b></h4>
                    <p class="card-text">{{$f->profesion}}</p>

                    <ul class="list-inline" style="padding-bottom: 20px;">
                      <li class="list-inline-item">
                        <a class="social-icon text-xs-center" target="_blank" href="#">
                          <span class="btn btn-primary">Ver más</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</div>

</div>
</div>

<!-- fin servicios -->
</div>

<!-- Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@endsection
@section('script')
<script>
  function add(ths,sno){


    for (var i=1;i<=5;i++){
      var cur=document.getElementById("star"+i)
      cur.className="fa fa-star"
    }

    for (var i=1;i<=sno;i++){
      var cur=document.getElementById("star"+i)
      if(cur.className=="fa fa-star")
      {
        cur.className="fa fa-star checked"
      }
    }

  }
</script>