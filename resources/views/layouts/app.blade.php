<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/real-estate-favicon.ico">
    <!-- Main Javascript File -->
    <script src="{{ asset('js/app.js') }} "></script>
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}">
        <!--     Fonts and icons     -->
            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- what does it go behind the rabbit hole?-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
    crossorigin="anonymous">
    <!-- Local styles -->
    <title>Instant Mobile House Content Management System</title>
</head>
<body>
<div id="particles-js">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
            <div class="container">
                <div class="navbar-translate">

                    <div class="content-adaptative">
                        <a class="navbar-brand" id="title" href="/cms">
                            <span class="navbar-text">
                                Instant Mobile House- CMS
                            </span>
                        </a>

                        <img src="./assets/img/logo.png" alt="" id="logo">
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                     <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li><a class="nav-link navbar-text" href="{{ route('login') }}">{{ __('Login') }}</a></li> --}}
                            {{-- <li><a class="nav-link navbar-text" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu navbar-text" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
{{--  HERE GOES CONTENT  --}}
@yield('content')
</div>
 <!-- FOOTER -->
        <footer class="footer z-index">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container flex-child">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" >
                                    <i class="fab fa-facebook-square fa-4x"></i>
                                                <br>
                                      <span class="fancy-colours ">Facebook</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" >
                                    <i class="fab fa-instagram fa-4x"></i>
                                                <br>
                                      <span class="fancy-colours ">Instagram</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" data-toggle="modal" data-target="#modal-aboutus">
                                    <i class="fas fa-users fa-4x"></i>
                                    <br>
                                      <span class="fancy-colours ">About us</span>
                                </a>
                            </li>

                                      {{--  <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" >
                                    <i class="fab fa-twitter fa-4x"></i>
                                </a>
                            </li>   --}}
                        </ul>
                        <span class="navbar-text">
                            <h4> Selling your property or looking the ideal one? Let us help you!
                                <br> call to
                                <span class="fancy-color">4564-54-5465</span> or
                                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#modal-contact">contact us</button> through our website.
                            </h4>
                    </div>
                </div>
            </nav>
        </footer>

        <!-- footer mobile -->
        <footer class="footermobile z-index">
            <div class="navbar navbar-dark">
                <div class="container">
                    <div class="navbar-translate">
                        <ul class="navbar-nav mr-auto footermobileorientation">
                           <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" >
                                    <i class="fab fa-facebook-square fa-4x"></i>
                                                <br>
                                      <span class="fancy-colours ">Facebook</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" >
                                    <i class="fab fa-instagram fa-4x"></i>
                                                <br>
                                      <span class="fancy-colours ">Instagram</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" data-toggle="modal" data-target="#modal-aboutus">
                                    <i class="fas fa-users fa-4x"></i>
                                    <br>
                                      <span class="fancy-colours ">About us</span>
                                </a>
                            </li>
                        </ul>  
                                      <span>
                                call to 
                                 <span class="fancy-color">4564-54-5465</span> or
                                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#modal-contact">contact us</button> 
                            </h4>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
          <!-- footer mobile small -->
        <footer class="footermobilesmall z-index">
            <div class="navbar navbar-dark">
                <div class="container">
                    <div class="navbar-translate">
                        <ul class="navbar-nav mr-auto footermobileorientation">
              <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" >
                                    <i class="fab fa-facebook-square fa-4x"></i>
                                                <br>
                                      <span class="fancy-colours ">Facebook</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" >
                                    <i class="fab fa-instagram fa-4x"></i>
                                                <br>
                                      <span class="fancy-colours ">Instagram</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" data-toggle="modal" data-target="#modal-aboutus">
                                    <i class="fas fa-users fa-4x"></i>
                                    <br>
                                      <span class="fancy-colours ">About us</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </footer>
<script src="{{ asset('js/particles.js') }}"></script>
<script src="{{ asset('js/app2.js') }}"></script>
<!-- Scripts -->
<!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-material-design.js') }}"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->

    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{ asset('js/material-kit.js?v=2.0.2') }}"></script>
    <script>
        $(document).ready(function () {

            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });
    </script>
</body>
</html>
