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
                                    <a class="nav-link active py-4" data-toggle="tab" href="#piscinas"><span class="flaticon-roof mr-2"></span> Piscinas</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link border-bottom py-4" data-toggle="tab" href="#tanques"><span class="flaticon-roof-7 mr-2"></span>Mantenimiento Tanques</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="impermeabilizacion"><span class="flaticon-roof-1 mr-2"></span> Impermeabilización</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-roof-5 mr-2"></span>Lavados y Limpieza</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-roof-2 mr-2"></span>Mantenimientos Locativos</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-roof-3 mr-2"></span> Jardineria</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#airconditioners"><span class="flaticon-roof-4 mr-2"></span> Aire Acondicionados</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 pl-md-4">
                            <div class="tab-content">
                                <div class="tab-pane container p-0 active" id="piscinas">
                                    <h3><a href="#">Piscinas</a></h3>
                                    <p style="text-align: justify">Los productos químicos no mantendrán las hojas y los insectos fuera del agua, ni mantendrán limpias indefinidamente las paredes y el piso. Así que no hay excusas.</p>
                                    <p style="text-align: justify">Además de utilizar cloro u otros productos químicos para mantener la limpieza de la piscina, también es absolutamente necesaria practicar una desinfección regular y completa de la propia construcción.</p>
                                    <p style="text-align: justify">A continuación describiremos una serie de pasos que deberíamos de verificar y practicar con coherencia:</p>
                                    <ul>
                                        <li><span class="fa fa-check"></span>Limpiar las paredes y el fondo</li>
                                        <li><span class="fa fa-check"></span>Lavar el sistema de filtrado</li>
                                        <li><span class="fa fa-check"></span>Rellena tu piscina</li>
                                        <li><span class="fa fa-check"></span>Regular el valor de PH</li>
                                        <li><span class="fa fa-check"></span>Aplica un tratamiento para el agua</li>
                                    </ul>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('piscinas') }}" class="btn btn-outline-success btn block btn-sm">Conoce mas...</a>
                                        <a href="#" class="btn btn-outline-success btn block btn-sm">Solicitar Cotizacion</a>
                                    </div>
                                </div>
                                <div class="tab-pane container p-0" id="tanques">
                                    <h3><a href="#">Tanques</a></h3>
                                    <p style="text-align: justify">Los tanques de almacenamiento domiciliario, y sus redes, deben ser sometidos a lavado y desinfección mínimo 2 veces al año y en caso de detectar daños o infiltraciones se debe realizar el lavado y desinfección después de su reparación.</p>
                                    <p style="text-align: justify">Edificios, conjuntos habitacionales, fábricas de alimentos, hospitales, hoteles, colegios, cárceles y demás edificaciones que conglomeren individuos, deben realizar el lavado y desinfección de los tanques de almacenamiento de aguas, colocando un aviso antes de realizar la acción, a fin de que se tomen medidas necesarias ante el corte de agua por lavado y desinfección de los tanques.</p>
                                    <ul>
                                        <li><span class="fa fa-check"></span>Limpiar las paredes y el fondo</li>
                                    </ul>

                                </div>
                                    <div class="tab-pane container p-0 fade" id="impermeabilizacion">
                                            <h3><a href="#">Impermeabilización</a></h3>
                                            <p style="text-align: justify;">La impermeabilización de losas, cubiertas y terrazas es muy importante para las edificaciones, ya que el agua es uno de los agentes más agresivos para los materiales de la construcción.</p>
                                            <p style="text-align: justify;">Pero la impermeabilización no solo es primordial para los edificios de vivienda e industria, si no también por ejemplo, en presas y tanques, ya que refuerza la contención de la estructura. Así mismo, en las redes por donde circula el agua (alcantarillado o tuberías) previene la contaminación del agua.</p>
                                            <p style="text-align: justify;">Existen muchos tipos de impermeabilizantes, aunque siempre hay algunos que ofrecen mejores resultados que otros. En el momento de seleccionar un sistema de impermeabilización se debe estar enterado de las características principales del producto para seleccionar el adecuado.</p>
                                            <ul>
                                                <li><span class="fa fa-check"></span>Acrílicos: impermeabilizantes a base de resinas acrílicas.</li>
                                                <li><span class="fa fa-check"></span>Cementicos: resistentes a los exteriores.</li>
                                                <li><span class="fa fa-check"></span>Acrílico – cementico: es un sistema semi-rígido por lo que tiene capacidad de movimiento</li>
                                                <li><span class="fa fa-check"></span>Poliuretanos modificados con asfalto:</li>
                                                <li><span class="fa fa-check"></span>Polureas en frío</li>
                                            </ul>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="services-3">
                                            <h3><a href="#">Mantenimiento Industrial</a></h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                            <ul>
                                                <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                                <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                                <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                                <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                                <li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
                                            </ul>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="services-4">
                                            <h3><a href="#">Mantenimiento Residencial</a></h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                            <ul>
                                                <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                                <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                                <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                                <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                                <li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
                                            </ul>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="services-5">
                                            <h3><a href="#">Lavados</a></h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                            <ul>
                                                <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                                <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                                <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                                <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                                <li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
                                            </ul>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="airconditioners">
                                            <h3><a href="#">Fumigaciones</a></h3>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                            <ul>
                                                <li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
                                                <li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
                                                <li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
                                                <li><span class="fa fa-check"></span>She packed her seven versalia</li>
                                                <li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
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
                        <h3 class="heading"><a href="{{ url('preguntas_frecuentes')}}"><p style="text-align: justify">Que debo conocer antes de realizar un mantenimiento a la piscina</p></a></h3>
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
