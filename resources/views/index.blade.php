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

                <h1 class="title2" style="color:#000; text-align:left;">MILES DE <span style="color:#80E27E;">JOBERS</span></h1>

                <h1 style="color:#000; text-align:left; margin-top:-10px;">DISPUESTOS A SOLUCIONAR TUS PROBLEMAS</h1>

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



<!-- Start Service area -->
<div id="services" class="services-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline services-head text-center">
          <h2>Categorias</h2>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="services-contents">
        <!-- Start Left services -->
        @foreach ($categorias as $c)
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                 <i class="fa fa-code"></i>
               </a>
               <h4>{{$c->nombre}}</h4>
               <p>

               </p>
             </div>
           </div>
           <!-- end about-details -->
         </div>
       </div>
       @endforeach

     </div>

   </div>

 </div>
 <!-- End Left services -->

 <!-- End Left services -->

</div>

<!-- End Service area -->

<!-- Start Wellcome Area -->
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
<!-- End Wellcome Area -->

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
        <button class="btn-primary" id="button">Ver Perfil</button>
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
<div id="portfolio" class="portfolio-area area-padding fix">
  <div class="section-headline text-center">
    <h2>Ultimos Servicios Publicados</h2>
  </div>
  <div class="container">
    <div class="section"> 
      <div class="row">
        <div class="col-md-12">
          @foreach($oferta as $o)
          <div class="col-md-4">
           <div class="card">
            <img class="card-img-top" src="/images/{{$o->imagen}}" alt="Card image cap" id="image">
            <div class="card-body" id="body">
              <br>
              <h5 class="card-title border-bottom pb-3"><b>Nombre: </b>{{$o->nombre}}</h5>
              <p class="card-text"><b>Descripcion:</b> {{$o->descripcion}}</p>
              <p class="card-text"><b>Ubicacion:</b> {{$o->municipio}}</p>
              <p class="card-text"><b>Profesion:</b> {{$o->profesion}}</p>
              <p class="card-text"><b>Experiencia:</b> {{$o->años_experiencia}} años</p>
              <button class="btn-primary">Ver Mas</button>
            </div>
          </div>
          <br>  <br>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
</div>

</div>
</div>

<!-- End column --><!-- End Team Area -->

<hr>
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