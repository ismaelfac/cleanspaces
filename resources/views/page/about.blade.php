@extends('content')
@section('title') Sobre Nosotros @endsection
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
                        <li class="nav-item active"><a href="{{ url('about')}}" class="nav-link">Sobre Nosotros</a></li>
                        <li class="nav-item"><a href="{{ url('services')}}" class="nav-link">Servicios</a></li>
                        <li class="nav-item"><a href="{{ url('project')}}" class="nav-link">Proyectos</a></li>
                        <li class="nav-item"><a href="{{ url('contact')}}" class="nav-link">Contactenos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start py-5">
                    @include('modules.about')
                    </div>
                </div>
                </div>
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
        <div class="container">
                <div class="row">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
                <div class="text">
                    <div class="icon"><span class="fa fa-calendar"></span></div>
                <strong class="number" data-number="45">0</strong>
                    <span>Years of Experienced</span>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
                <div class="text">
                    <div class="icon"><span class="fa fa-briefcase"></span></div>
                <strong class="number" data-number="8500">0</strong>
                    <span>Project completed</span>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
                <div class="text">
                    <div class="icon"><span class="fa fa-users"></span></div>
                <strong class="number" data-number="2342">0</strong>
                    <span>Happy Clients</span>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
                <div class="text">
                    <div class="icon"><span class="fa fa-bar-chart"></span></div>
                <strong class="number" data-number="30">0</strong>
                    <span>Business Partners</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Testimonios</span>
                <h2>Lo que piensan nuestros clientes</h2>
            </div>
            </div>
            <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Administrador XYZ</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div> 
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('partials.footer')
@endsection