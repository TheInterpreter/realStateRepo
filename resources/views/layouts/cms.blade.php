<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="icon" href="img/real-estate-favicon.ico">

    <!-- Fonts and icons  -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
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
    <div id="particles-js">
        <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
            <div class="container">
                <div class="navbar-translate">
                
                    <div class="content-adaptative">
                        <a class="navbar-brand" id="title" href="/">
                            <span class="navbar-text">
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
                        <li class="nav-item">
                            <a class="nav-link disabled" rel="tooltip" title="NEW PROPERTY" href="/cms/create">
                                <i class="fas fa-plus-square fa-3x"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" title="Log Out" rel="tooltip" data-placement="bottom" href="/" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                {{ __('') }}
                                <i class="fas fa-sign-out-alt fa-3x"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- HERE GOES CONTENT --}} @yield('page-content')
    </div>
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

</html>