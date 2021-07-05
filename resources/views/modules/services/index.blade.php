@extends('welcome')
@section('title') Servicios @endsection
@Push('styles')
    <style>
      .ftco-section {
        padding: 4em 0 !important;
        position: relative;
      }
    </style>
@endpush
@section('content')
<section class="menu-wrap flex-md-column-reverse d-md-flex" style="margin-top:120px">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="{{ url('/')}}" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="{{ url('about')}}" class="nav-link">Sobre Nosotros</a></li>
                    <li class="nav-item active"><a href="{{ url('services')}}" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="{{ url('project')}}" class="nav-link">Proyectos</a></li>
                    <li class="nav-item"><a href="{{ url('contact')}}" class="nav-link">Contactenos</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
          @isset($services)
          <section class="ftco-section bg-light">
            <div class="container">
              <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                  <span class="subheading">Nuestros Servicios</span>
                  <h2>Consulte con nosotros</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 ftco-animate" style="margin-bottom: 15px;">
                  <div class="block-7">
                    <div class="text-center">
                    <span class="excerpt d-block">Standard</span>
                    <span class="price"><sup>$</sup> <span class="number">49</span></span>
                    
                    <ul class="pricing-text mb-5">
                      <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                      <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                      <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                      <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                      <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                    </ul>

                    <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 ftco-animate" style="margin-bottom: 15px;">
                  <div class="block-7">
                    <div class="text-center">
                    <span class="excerpt d-block">Basic</span>
                    <span class="price"><sup>$</sup> <span class="number">79</span></span>
                    
                    <ul class="pricing-text mb-5">
                      <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                      <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                      <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                      <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                      <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                    </ul>

                    <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 ftco-animate" style="margin-bottom: 15px;">
                  <div class="block-7">
                    <div class="text-center">
                    <span class="excerpt d-block">Standard</span>
                    <span class="price"><sup>$</sup> <span class="number">109</span></span>
                    
                    <ul class="pricing-text mb-5">
                      <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                      <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                      <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                      <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                      <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                    </ul>

                    <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 ftco-animate" style="margin-bottom: 15px;">
                  <div class="block-7">
                    <div class="text-center">
                    <span class="excerpt d-block">Standard</span>
                    <span class="price"><sup>$</sup> <span class="number">109</span></span>
                    
                    <ul class="pricing-text mb-5">
                      <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                      <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                      <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                      <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                      <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                    </ul>

                    <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          @endisset
            
          @empty($services)
            @yield('contentServices')
          @endempty
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Servicios</h3>
                <li><a href="{{ url('piscinas')}} ">Piscinas <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="{{ url('tanques')}}">Mantenimiento de Tanques <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="{{ url('impermeabilizacion')}}">Impermeabilizacion <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="{{ url('lavado_limpieza')}}">Lavado y Limpieza <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="{{ url('mantenimientos_locativos')}}">Mantenimientos Locativos<span class="fa fa-chevron-right"></span></a></li>
                <li><a href="{{ url('jardineria')}}">Jardineria<span class="fa fa-chevron-right"></span></a></li>
                <li><a href="{{ url('aires_acondicionados')}}">Aires Acondicionados<span class="fa fa-chevron-right"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Preguntas Frecuentes</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/services/work25.jpeg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ url('preguntas_frecuentes') }}">Que debo conocer antes de realizar un mantenimiento a la piscina</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>24 Febrero 2021</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/services/work23.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ url('preguntas_frecuentes') }}">¿Cada cuanto debo realizar mantenimiento a los aires acondicionados?</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>24 Febrero 2021</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/services/work26.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ url('preguntas_frecuentes') }}">¿Cuál es el mejor impermeabilizante para techos?</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>24 Marzo 2021</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->
@endsection
@section('footer')
    @include('partials.footer')
@endsection