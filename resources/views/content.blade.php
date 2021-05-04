@extends('welcome')

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row justify-content-start py-5 pr-md-4">
                <div class="col-md-12 heading-section ftco-animate py-md-4">
                    <h2 class="mb-4">We help more than 45 years installing your roof</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <div class="tabulation-2 mt-4">
                        <ul class="nav nav-pills nav-fill d-md-flex d-block">
                        <li class="nav-item mb-md-0 mb-2">
                            <a class="nav-link active py-3" data-toggle="tab" href="#home1">Nuestra Misión</a>
                        </li>
                        <li class="nav-item px-lg-2 mb-md-0 mb-2">
                            <a class="nav-link py-3" data-toggle="tab" href="#home2">Nuestra Visión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3 mb-md-0 mb-2" data-toggle="tab" href="#home3">Nuestro Valor</a>
                        </li>
                        </ul>
                        <div class="tab-content rounded mt-2">
                        <div class="tab-pane container p-0 active" id="home1">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="home2">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="home3">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="bg-white">
                    <div class="w-100 heading-title bg-primary text-center">
                        <h2 class="mb-0">Consigue una cotización</h2>
                    </div>
                        <form action="#" class="appointment bg-white p-4 p-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                        <div class="form-field">
                                    <div class="select-wrap">
                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <select name="" id="" class="form-control">
                                <option value="">Select Services</option>
                                <option value="">Skylights</option>
                                <option value="">Waterproofing</option>
                                <option value="">Industrial Roofing</option>
                                <option value="">Residential Roofing</option>
                                <option value="">Gutter Cleaning</option>
                                <option value="">Commercial Roofing</option>
                            </select>
                            </div>
                            </div>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <div class="input-wrap">
                                    <div class="icon"><span class="fa fa-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <div class="input-wrap">
                                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                            <input type="submit" value="Solicitar" class="btn btn-primary py-3 px-4">
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
                                    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-roof mr-2"></span> Piscinas</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-roof-1 mr-2"></span> Impermeabilización</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-roof-5 mr-2"></span>Mantenimiento Industrial</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-roof-2 mr-2"></span>Mantenimiento Residential</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-roof-3 mr-2"></span> Lavados</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-roof-4 mr-2"></span> Fumigaciones</a>
                                </li>
                                <li class="nav-item text-left">
                                    <a class="nav-link border-bottom py-4" data-toggle="tab" href="#services-7"><span class="flaticon-roof-7 mr-2"></span> Otros Servicios</a>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-8 pl-md-4">
                                <div class="tab-content">
                                <div class="tab-pane container p-0 active" id="services-1">
                                    <h3><a href="#">Piscinas</a></h3>
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
                                <div class="tab-pane container p-0 fade" id="services-2">
                                    <h3><a href="#">Impermeabilización</a></h3>
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
                                <div class="tab-pane container p-0 fade" id="services-6">
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
                                <div class="tab-pane container p-0 fade" id="services-7">
                                    <h3><a href="#">Otros Servicios</a></h3>
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
                        <div class="img" style="background-image: url(images/about.jpg);"></div>
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

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Planes y Servicios</span>
            <h2>Suscribete con nosotros</h2>
        </div>
        </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
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
            <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block">Basic</span>
                <span class="price active"><sup>$</sup> <span class="number">79</span></span>

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
            <div class="col-md-6 col-lg-3 ftco-animate">
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
            <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block">Professional</span>
                <span class="price"><sup>$</sup> <span class="number">149</span></span>

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
@endsection
