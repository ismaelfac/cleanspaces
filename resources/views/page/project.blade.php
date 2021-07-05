@extends('content')
@section('title') Proyectos @endsection
@Push('styles')
    <style>
      .ftco-section {
        padding: 8em 0 !important;
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
                        <li class="nav-item"><a href="{{ url('services')}}" class="nav-link">Servicios</a></li>
                        <li class="nav-item active"><a href="{{ url('project')}}" class="nav-link">Proyectos</a></li>
                        <li class="nav-item"><a href="{{ url('contact')}}" class="nav-link">Contactenos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters">
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
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>	
@endsection
