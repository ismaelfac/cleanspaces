<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registrate con CleanSpace</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
  </head>
  <body>
	<div class="wrap">
	    <div class="container">
            <div class="row justify-content-between">
                <div class="col-3 d-flex align-items-center">
                    <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div class="d-flex align-items-center justify-content-center"></div><img src="images/logo.png" alt="" width="150px"></a>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-center">
                    <a href="{{ url('/') }}" class="btn btn-primary btn-sm mr-2">Inicio </a>
                    <a href="{{ url('login') }}" class="btn btn-primary btn-sm mr-2">Acceder </a>
                    <a href="{{ url('register') }}" class="btn btn-primary btn-sm">Registrate </a>
                    <div class="social-media">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="menu-wrap flex-md-column-reverse d-md-flex">
        <!-- END nav -->
        <div class="hero-wrap js-fullheight">
            <div class="home-slider js-fullheight owl-carousel">
                <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                            <div class="col-md-12 text-center ftco-animate">
                            <div class="row" style="margin-top: 60px">                                
                                <div class="col-sm-6">
                                    <div id="app" class="bg-white">
                                        <div class="w-100 bg-primary text-center" style="padding: 10px">
                                            <h2 class="mb-0" style="color: white">Ingresa tus datos</h2>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}" class="appointment bg-white p-3 p-md-4">
                                            @csrf
                                            <div class="row">
                                                <register-component></register-component>
                                                <div class="col-md-12">
                                                    <div class="form-group form-control-sm">
                                                        <input type="submit" class="btn btn-primary py-3 px-4" value="Registrame">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-white">
                                        <div class="w-100 bg-primary text-center" style="padding: 10px">
                                            <h2 class="mb-0" style="color: white">Registrate con nosotros</h2>
                                        </div>
                                        <div class="row">
                                            <p style="color: green">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim laboriosam illum accusamus iusto aliquam, beatae suscipit, doloribus voluptas pariatur aliquid ducimus, cum placeat! Libero tempora, sint numquam voluptate harum minus.</p>
                                        </div>
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
  <!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
  </body>
</html>
