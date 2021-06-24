@extends('welcome')
@section('header')
    @include('partials.header')
@endsection
@section('content')
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
            @include('modules.services')
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
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-1.jpg);">
                    <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-2.jpg);">
                    <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-3.jpg);">
                    <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-4.jpg);">
                    <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-5.jpg);">
                    <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-6.jpg);">
                    <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-7.jpg);">
                    <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-3 ftco-animate">
                <div class="work img d-flex align-items-end" style="background-image: url(images/work-8.jpg);">
                    <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                    <div class="desc w-100 px-4">
                    <div class="text w-100 mb-3">
                        <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                        <span>House</span>
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

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Plataforma CleanSpaces</span>
                    <h4>Registrate y maneja todos tus servicios con nuestra plataforma de servicios</h4>
                </div>
                </div>
                <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text p-3">
                        <div class="posted mb-3 d-flex">
                            <div class="img author" style="background-image: url(images/person_2.jpg);"></div>
                            <div class="desc pl-3">
                                <span>Posted by John doe</span>
                                <span>24 February 2020</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">How Roofing Charge for Their Services</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text p-3">
                        <div class="posted mb-3 d-flex">
                            <div class="img author" style="background-image: url(images/person_3.jpg);"></div>
                            <div class="desc pl-3">
                                <span>Posted by John doe</span>
                                <span>24 February 2020</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">How Roofing Charge for Their Services</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text p-3">
                        <div class="posted mb-3 d-flex">
                            <div class="img author" style="background-image: url(images/person_1.jpg);"></div>
                            <div class="desc pl-3">
                                <span>Posted by John doe</span>
                                <span>24 February 2020</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">How Roofing Charge for Their Services</a></h3>
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
