@extends('welcome')
@section('title') Servicios @endsection
@section('header')
<section class="menu-wrap flex-md-column-reverse d-md-flex">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="{{ url('/')}}" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="{{ url('about')}}" class="nav-link">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="{{ url('services')}}" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="{{ url('project')}}" class="nav-link">Proyectos</a></li>
                    <li class="nav-item"><a href="{{ url('contact')}}" class="nav-link">Contactenos</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>
@endsection
@section('content')
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
          @isset($services)
              <p>Existen servicios</p>
          @endisset
            
          @empty($records)
            @yield('contentServices')
          @endempty
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Servicios</h3>
                <li><a href="{{ url('piscinas') }}">Piscinas <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Waterproofing <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Industrial Roofing <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Residential Roofing <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Gutter Cleaning<span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Commercial Roofing<span class="fa fa-chevron-right"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>Mar. 24, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>Mar. 24, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>Mar. 24, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">roof</a>
                <a href="#" class="tag-cloud-link">home</a>
                <a href="#" class="tag-cloud-link">repair</a>
                <a href="#" class="tag-cloud-link">renovate</a>
                <a href="#" class="tag-cloud-link">mechanics</a>
                <a href="#" class="tag-cloud-link">residential</a>
                <a href="#" class="tag-cloud-link">industrial</a>
                <a href="#" class="tag-cloud-link">gutter</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
@endsection
@section('footer')
    @include('partials.footer')
@endsection