<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="icon" href="img/real-estate-favicon.ico">

    <!-- Fonts and icons  -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Main Javascript File -->
    <!-- <script src="js/app.js"></script> -->

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}">
    <title>
        Instant Mobile House
    </title>
</head>

<body>
    <div id="layer">
        <header class="wrapp">
            <nav class="navbar     fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
                <div class="container">
                    <div class="navbar-translate">

                        <div class="content-adaptative">
                            <a class="navbar-brand" href="/" id="title">
                                <span class="navbar-text timesfont">
                                    Instant Mobile House
                                </span>
                            </a>

                            <img src="img/logo.png" alt="" id="logo">
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">

                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">

                            {{-- <li class="nav-item">
                                <a href="/photos" class="nav-link">
                                    <i class="fas fa-camera-retro fa-2x icon"></i> Photos
                                </a>
                                </a>
                            </li>                            --}}
                            <li class="nav-item">
                                <a href="/floorplans" class="nav-link">
                                    <i class="fas fa-gavel fa-2x icon"></i> SEE OUR FLOORPLANS
                                </a>
                                </a>
                            </li>
                             {{--  <li class="nav-item">
                                <a href="/permits" class="nav-link">
                                    <i class="fas fa-book fa-2x icon"></i> Permits
                                </a>
                                </a>
                            </li>    --}}
                             {{--  <li class="nav-item">
                                <a href="/financing" class="nav-link">
                                    <i class="fas fa-credit-card fa-2x icon"></i> Financing
                                </a>
                                </a>
                            </li>  --}}
                             <li class="nav-item">
                                <a href="/3D" class="nav-link">
                                    <i class="fas fa-box fa-2x icon"></i> 3D Tours
                                </a>
                                </a>
                            </li>
                                                        <li class="nav-item">
                                <a href="/about" class="nav-link">
                                    <i class="fas fa-users fa-2x icon"></i> About Us
                                </a>
                                </a>
                            </li>
                           <li class="nav-item">
                                <a href="/contact" class="nav-link">
                                    <i class="fas fa-phone fa-2x icon"></i> Contact Us
                                </a>
                                </a>
                            </li>
                            {{-- <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="material-icons">apps</i> OPERATIONS
                                </a>
                                <div class="dropdown-menu dropdown-with-icons">
                                    <a class="dropdown-item" data-toggle="modal" href="#modal-contact-buy">
                                        <i class="far fa-building fa-2x icon"></i> PURCHASE A PROPERTY
                                    </a>
                                    <a class="dropdown-item" data-toggle="modal" href="#modal-contact-sell">
                                        <i class="far fa-money-bill-alt fa-2x" id="money"></i> SELL YOURS
                                    </a>
                                </div>

                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="flex-container wrapper" id="header" style="margin-top:-15px;margin-bottom:-95%;">
                <div class="aboveFold">
                    <div class="carousel carousel-header slide filler" data-ride="carousel" data-pause="false" style="margin-bottom: 64%; margin-right:-20%!important; margin-left:-21%!important; ">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="img/carousel/u01.jpeg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel/u02.jpeg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel/u03.jpeg" alt="Third slide">
                            </div>
                            {{--  <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel/03.jpeg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel/04.jpeg" alt="Fifth slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel/05.jpeg" alt="Sixth slide">
                            </div>  --}}
                        </div>
                    </div>
                    {{--  <video autoplay muted loop poster="video/Snapshots/South_Carolina_City.jpg">
                        <source src="video/WEBM/South_Carolina_City.webm" type="video/webm" />
                    </video>  --}}
                    <div class="container">
                        <!-- Codrops top bar -->
                        <div class="codrops-top"></div>
                        <!--/ Codrops top bar -->
                        <section class="rw-wrapper">
                            <div class="rw-words rw-words-1 poetry timesfont">
                                <span>FINANCING</span>
                                <span>PERMITTING</span>
                                <span>CUSTOM HOMES</span>
                                {{-- <span>ALL AT THE REACH OF YOUR HAND</span>
                                <span>YOUR REAL ESTATE AGENTS AT CALL</span>
                                <span>Instant Mobile House</span> --}}
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </header>
    </div>
        @yield('main-content')
        <!-- FOOTER -->
        <footer >
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container flex-child footermobileorientation">
                    <h4>
                        <span class="fancy-color timesfont">Instant Mobile House</span>
                        <br>
                        All rights reserved 2018.
                    </h4>
                </div>
            </nav>
        </footer>

        <!-- footer mobile -->
        <footer class="footermobile z-index">
            <div class="navbar navbar-dark">
                        <div class="container">
                            <div class="navbar-translate">
                                            <div class="container flex-child footermobileorientation">
                            <h4>
                                <span class="fancy-color timesfont">Instant Mobile House</span>
                                <br>
                                All rights reserved 2018.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
          <!-- footer mobile small -->
        <footer class="footermobilesmall z-index">
          <div class="navbar navbar-dark">
                        <div class="container">
                            <div class="navbar-translate">
                                            <div class="container flex-child footermobileorientation">
                            <h4>
                                <span class="fancy-color timesfont">Instant Mobile House</span>
                                <br>
                                All rights reserved 2018.
                            </h4>
                        </div>
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
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{ asset('js/material-kit.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.backstretch.min.js') }}"></script>
    <script>
        // JS
        var video = document.querySelector('video')
            , container = document.querySelector('#container');

        var setVideoDimensions = function () {
            // Video's intrinsic dimensions
            var w = video.videoWidth
                , h = video.videoHeight;

            // Intrinsic Ratio
            // Will be more than 1 if W > H and less if W < H
            var videoRatio = (w / h).toFixed(2);

            // Get the container's computed styles
            //
            // Also calculate the min dimensions required (this will be
            // the container dimentions)
            var containerStyles = window.getComputedStyle(container)
                , minW = parseInt(containerStyles.getPropertyValue('width'))
                , minH = parseInt(containerStyles.getPropertyValue('height'));

            // What's the min:intrinsic dimensions
            //
            // The idea is to get which of the container dimension
            // has a higher value when compared with the equivalents
            // of the video. Imagine a 1200x700 container and
            // 1000x500 video. Then in order to find the right balance
            // and do minimum scaling, we have to find the dimension
            // with higher ratio.
            //
            // Ex: 1200/1000 = 1.2 and 700/500 = 1.4 - So it is best to
            // scale 500 to 700 and then calculate what should be the
            // right width. If we scale 1000 to 1200 then the height
            // will become 600 proportionately.
            var widthRatio = minW / w
                , heightRatio = minH / h;

            // Whichever ratio is more, the scaling
            // has to be done over that dimension
            if (widthRatio > heightRatio) {
                var newWidth = minW;
                var newHeight = Math.ceil(newWidth / videoRatio);
            }
            else {
                var newHeight = minH;
                var newWidth = Math.ceil(newHeight * videoRatio);
            }

            video.style.width = newWidth + 'px';
            video.style.height = newHeight + 'px';
        };

        video.addEventListener('loadedmetadata', setVideoDimensions, false);
        window.addEventListener('resize', setVideoDimensions, false);
    </script>
</body>
