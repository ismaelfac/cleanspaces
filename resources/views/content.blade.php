@extends('welcome')
@section('header')
    @include('partials.header')
@endsection
@section('content')
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
    <!-- END nav -->
    <div class="hero-wrap js-fullheight">
        <div class="home-slider js-fullheight owl-carousel">
            <div class="slider-item js-fullheight" style="background-image:url(images/image_5.jpg);">
                <div class="overlay"></div>
                <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-10 text-center ftco-animate">
                        <div class="text w-100">
                            <h2 style="background-color: rgba(15, 126, 98, 0.6); padding:5px; ">Tienes un proyecto o requerimiento</h2>
                            <h1 class="mb-4">Te ayudamos a materializarlo</h1>
                            <p><a href="services" class="btn btn-success">Conoce nuestro portafolio</a></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-8 text-center ftco-animate">
                        <div class="text w-100">
                            <h2 style="background-color: rgba(194, 188, 186, .60); padding:5px; ">Tienes un proyecto o requerimiento</h2>
                            <h1 class="mb-4">Te ayudamos a materializarlo</h1>
                            <p><a href="services" class="btn btn-success">Conoce nuestro portafolio</a></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div>
        <section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-appointment">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-7">
                        @include('modules.about')
                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <div id="app" class="bg-white">
                            <div class="w-100 heading-title bg-success text-center">
                                <h2 class="mb-0">Quieres una cotización</h2>
                            </div>
                            <form method="POST" action="{{ url('quotes') }}" class="appointment bg-white p-4 p-md-5">
                                @csrf
                                    <div class="row">
                                        <quotes-component></quotes-component>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Enviar Solicitud" class="btn btn-primary py-3 px-4" />
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-counter" id="section-counter">
            <div class="container">
                @guest
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <strong class="number" data-number="10">0</strong>
                                <span>Años de experiencia</span>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="fa fa-briefcase"></span></div>
                                <strong class="number" data-number="100">0</strong>
                                <span>Proyectos completados</span>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="fa fa-users"></span></div>
                                <strong class="number" data-number="2342">0</strong>
                                <span>Clientes Satisfechos</span>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="fa fa-bar-chart"></span></div>
                                <strong class="number" data-number="30">0</strong>
                                <span>Nuevos Clientes por año</span>
                            </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                            <div class="text">
                                <a href="{{ url('portal') }}" class="btn btn-outline-light btn-sm mr-2">Acceder a mi Portal </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                            <div class="text">
                                <h4 style="color: white">Encuentra en tu portal CleanSpace, todo lo que necesitas</h4>
                            </div>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4">Nuestros Servicios</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row tabulation mt-4 ftco-animate">
                        <div class="col-md-4">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#limpiezaIntegral"><span class="flaticon-roof mr-2"></span> Limpieza Integral</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#mantenimientosIntegrales"><span class="flaticon-roof mr-2"></span>Mantenimientos Integrales</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 pl-md-4">
                            <div class="tab-content">
                                <div class="tab-pane container p-0 active" id="limpiezaIntegral">
                                    <h3><a href="#">Limpieza Integral</a></h3>
                                    <p style="text-align: justify"><b>CleanSpaces</b> Presenta nuestros servicios para el aseo, de acuerdo a su necesidad y/o tipo de empresa </p>
                                    <p style="text-align: justify">A continuación describiremos nuestros servicios de aseo de acuerdo a su necesidad:</p>
                                    <ul>
                                        <li><span class="fa fa-check"></span>Aseo por dias / horas</li>
                                        <li><span class="fa fa-check"></span>Aseos Conjuntos residenciales</li>
                                        <li><span class="fa fa-check"></span>Aseos para empresas y oficinas</li>
                                        <li><span class="fa fa-check"></span>Aseos Institucionales</li>
                                        <li><span class="fa fa-check"></span>Aseos Hospitalarios</li>
                                    </ul>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('services') }}" class="btn btn-outline-success btn block btn-sm">Conoce mas...</a>
                                        <a href="{{ url('services') }}" class="btn btn-outline-success btn block btn-sm">Solicitar Cotizacion</a>
                                    </div>
                                </div>
                                <div class="tab-pane container p-0" id="mantenimientosIntegrales">
                                    <h3><a href="#">Mantenimientos Integrales</a></h3>
                                    <p style="text-align: justify">Los mantenimientos son importantes para el correcto funcionamiento de los equipos de su empresa, realizandolos de acuerdo a lo establecido por el fabricante, se garantiza un perfecto funcionamiento y durabilidad del producto: </p>
                                    <p style="text-align: justify"><b>CleanSpaces</b> le ofrece a continuación  nuestros servicios de mantenimientos de acuerdo a su requerimiento: </p>
                                    <ul>
                                        <li><span class="fa fa-check"></span><a href="{{ url('mantenimientos_locativos') }}">Mantenimientos Locativos</a></li>
                                        <li><span class="fa fa-check"></span><a href="{{ url('aires_acondicionados') }}">Mantenimientos de aires acondicionados</a></li>
                                        <li><span class="fa fa-check"></span><a href="{{ url('piscinas') }}">Mantenimientos de Piscinas</a></li>
                                        <li><span class="fa fa-check"></span><a href="{{ url('jardineria') }}">Mantenimientos de Jardineria</a></li>
                                        <li><span class="fa fa-check"></span><a href="{{ url('tanques') }}">Lavado de tanques</a></li>
                                        <li><span class="fa fa-check"></span><a href="{{ url('lavado_limpieza') }}">Limpieza de Fachadas</a></li>
                                        <li><span class="fa fa-check"></span><a href="{{ url('tapicerias') }}">Lavado, tapicerias y muebles</a></li>
                                        <li><span class="fa fa-check"></span><a href="{{ url('impermeabilizacion') }}">Impermeabilización</a></li>
                                    </ul>

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-stretch">
                        <div class="img" style="background-image: url(images/about.jpg); height: 100%;"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pb ftco-no-pt">
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Proyectos</span>
                        <h2>Algunos Proyectos</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-md-0">
                <div class="row no-gutters">
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work1.jpeg);">
                            <a href="images/services/work14.jpeg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                                <div class="text w-100 mb-3">
                                    <h2><a href="{{ url('preguntas_frecuentes') }}">Limpieza de Fachadas</a></h2>
                                    <span>Edificios, Casas, Industrias </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work2.jpeg);">
                            <a href="images/services/work21.jpeg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="{{ url('preguntas_frecuentes') }}">Impermeabilización</a></h2>
                                <span>Empresa, Casas Comerciales, Bodegas</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work3.jpeg);">
                            <a href="images/services/work3.jpeg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="{{ url('preguntas_frecuentes') }}">Limpieza y lavado de muebles</a></h2>
                                <span>Empresa, Casas Comerciales, Bodegas</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work4.jpeg);">
                            <a href="images/services/work9.jpeg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="{{ url('preguntas_frecuentes') }}">Mantenimientos Locativos</a></h2>
                                <span>Empresa, Casas Comerciales, Bodegas</span>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work18.jpeg);">
                            <a href="images/services/work17.jpeg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="{{ url('preguntas_frecuentes') }}">Aseo y Limpieza</a></h2>
                                <span>Empresa, Casas Comerciales, Bodegas</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work23.jpg);">
                            <a href="images/services/work22.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="{{ url('preguntas_frecuentes') }}">Mantenimientos Aires Acondicionados</a></h2>
                                <span>Empresa, Casas Comerciales, Bodegas</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work7.jpeg);">
                            <a href="images/services/work10.jpeg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="{{ url('preguntas_frecuentes') }}">Jardineria</a></h2>
                                <span>Empresa, Casas Comerciales, Bodegas</span>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url(images/services/work24.jpg);">
                            <a href="images/services/work25.jpeg" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fa fa-expand"></span>
                                    </a>
                            <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="{{ url('preguntas_frecuentes') }}">Mantenimiento de Psicinas</a></h2>
                                <span>Empresa, Casas Comerciales, Bodegas</span>
                            </div>
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
                            <p class="mb-4" style="text-align: justify"><b>CleanSpaces</b> nos ha materializado nuestros proyectos de obras civils, y mantenimientos de nuestras locaciones. con una excelente mano de obra y servicio al cliente. </p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url(images/our_clients/aliados.png)"></div>
                                <div class="pl-3">
                                    <p class="name">Coordinadora</p>
                                    <span class="position"> Administrativa</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                        <div class="text">
                            <p class="mb-4" style="text-align: justify"><b>CleanSpaces</b> nos ha materializado nuestros proyectos de obras civils, y mantenimientos de nuestras locaciones. con una excelente mano de obra y servicio al cliente. </p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url(images/our_clients/aliados.png)"></div>
                                <div class="pl-3">
                                    <p class="name">Coordinadora</p>
                                    <span class="position"> Administrativa</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                        <div class="text">
                            <p class="mb-4" style="text-align: justify"><b>CleanSpaces</b> nos ha materializado nuestros proyectos de obras civils, y mantenimientos de nuestras locaciones. con una excelente mano de obra y servicio al cliente. </p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url(images/our_clients/aliados.png)"></div>
                                <div class="pl-3">
                                    <p class="name">Coordinadora</p>
                                    <span class="position"> Administrativa</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                        <div class="text">
                            <p class="mb-4" style="text-align: justify"><b>CleanSpaces</b> nos ha materializado nuestros proyectos de obras civils, y mantenimientos de nuestras locaciones. con una excelente mano de obra y servicio al cliente. </p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url(images/our_clients/aliados.png)"></div>
                                <div class="pl-3">
                                    <p class="name">Coordinadora</p>
                                    <span class="position"> Administrativa</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                        <div class="text">
                            <p class="mb-4" style="text-align: justify"><b>CleanSpaces</b> nos ha materializado nuestros proyectos de obras civils, y mantenimientos de nuestras locaciones. con una excelente mano de obra y servicio al cliente. </p>
                            <div class="d-flex align-items-center">
                                <div class="user-img" style="background-image: url(images/our_clients/aliados.png)"></div>
                                <div class="pl-3">
                                    <p class="name">Coordinadora</p>
                                    <span class="position"> Administrativa</span>
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

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Preguntas Frecuentes</span>
                        <h4>En CleanSpace sabemos que puedes tener dudas. Aqui te brindamos un glosario de preguntas frecuentes </h4>
                    </div>
                </div>
                <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                    <a href="{{ url('preguntas_frecuentes') }}" class="block-20" style="background-image: url('images/services/work25.jpeg');">
                    </a>
                    <div class="text p-3">
                        <div class="posted mb-3 d-flex">
                            <div class="desc pl-3">
                                <span>Mantenimientos a las piscinas</span>
                                <span>24 Febrero 2021</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{ url('preguntas_frecuentes')}}"><p style="text-align: justify">¿Que debo conocer antes de realizar un mantenimiento a la piscina?</p></a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                    <a href="{{ url('preguntas_frecuentes') }}" class="block-20" style="background-image: url('images/services/work23.jpg');">
                    </a>
                    <div class="text p-3">
                        <div class="posted mb-3 d-flex">
                            <div class="desc pl-3">
                                <span>Aires Acondicionados</span>
                                <span>24 Febrero 2021</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{ url('preguntas_frecuentes') }}">¿Cada cuanto debo realizar mantenimiento a los aires acondicionados?</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                    <a href="{{ url('preguntas_frecuentes') }}" class="block-20" style="background-image: url('images/services/work26.jpg');">
                    </a>
                    <div class="text p-3">
                        <div class="posted mb-3 d-flex">
                            <div class="desc pl-3">
                                <span>Impermeabilización</a></span>
                                <span>24 Marzo 2021</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{ url('preguntas_frecuentes') }}">¿Cuál es el mejor impermeabilizante para techos?</a></h3>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>

@endsection
@section('footer')
    @include('partials.footer')
@endsection
