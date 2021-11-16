<html class="loaded" lang="es" style="--vh:5.7px; transform: none;">

<head>
    <link type="text/css" id="dark-mode" rel="stylesheet" href="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOSPITAL DE LA MUJER</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistema de gestión interna de QHANTUY a nivel nacional.">
    <meta name="keywords" content="QHANTUY, pagos, transacción, cobros, dinero, servicio">
    <meta name="google-site-verification" content="">

    <link rel="icon" href="http://localhost:8080/api/public/assets/img/logo.png">
    <!--begin::Web font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <!-- Escential Initial Styles -->
    <link rel="stylesheet" href="{{ url("assets/css/styles.css") }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/subadmin/css/app-file-manager.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/xtras/swiperjs/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/css/main-43b567ae56.css')}}">
    <link rel="stylesheet" href="{{asset('assets/subadmin/css/vertical-menu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/subadmin/css/page-auth.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/subadmin/css/form-validation/form-validation.min.css')}}">
</head>

<body class="subadmin-site vertical-layout blank-page navbar-floating footer-static pace-done menu-hide vertical-overlay-menu" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                       
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <div class="card mb-0 card_type-login">
                            <div class="card-body shadow">
                                <a href="javascript:void(0);" class="brand-logo login">
                                    <img src="http://localhost:8080/api/public/assets/img/logos.png" alt="QHANTUY" height="250px" width="250px">
                                </a>

                                <h4 class="card-title mb-1">Bienvenido Al Hospital De La Mujer !</h4>


                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="email" class="form-label">Rol</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    </div>

                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">Clave</label>

                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                        <input id="password" type="password" class="form-control" name="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="hidden text-hide" hidden="" readonly="" name="encoded" id="encoded" value="==QOBRkVRpEbRNnSxUVYatmV">
                                    </div>

                                    <button class="btn btn-primary btn-block waves-effect waves-float waves-light" tabindex="4">Iniciar Sesión</button>
                                </form>

                                <p class="text-center mt-2">
                                    <span>Conoce Mas Noticias Sobre Nuestras Instalaciones</span>
                                    <a target="_blank" href="https://www.facebook.com/Hospital-de-la-Mujer-LP-Hosp-de-3er-Nivel-103171064777095/">
                                        <span>Hospital De La Mujer</span>
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="{{ asset('assets/subadmin/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/subadmin/js/leaflet.min.js') }}"></script>
    <script src="{{asset('assets/subadmin/js/vendors.min.js')}}"></script>
    <script src="{{asset('assets/subadmin/js/app-menu.js')}}"></script>
    <script src="{{asset('assets/subadmin/js/app.js')}}"></script>
    <script src="{{asset('assets/subadmin/js/app-file-manager.js')}}"></script>

    <script src="{{ asset('assets/subadmin/js/select2.full.min.js') }}"></script>


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    <script>
        $(function() {
            'use strict';

            var pageLoginForm = $('.auth-login-form');

            if (pageLoginForm.length) {
                pageLoginForm.validate({
                    /*
                    * ? To enable validation onkeyup
                    onkeyup: function (element) {
                        $(element).valid();
                    },*/
                    /*
                    * ? To enable validation on focusout
                    onfocusout: function (element) {
                        $(element).valid();
                    }, */
                    rules: {
                        'email': {
                            required: true,
                            email: true
                        },
                        'password': {
                            required: true
                        }
                    }
                });
            }
        });
    </script>
    <link rel="stylesheet" type="text/css" property="stylesheet" href="//localhost:8080/yoopey/public/_debugbar/assets/stylesheets?v=1626182770">
    <script type="text/javascript" src="//localhost:8080/yoopey/public/_debugbar/assets/javascript?v=1626182770"></script>
    <script type="text/javascript">
        jQuery.noConflict(true);
    </script>





</body>

</html>