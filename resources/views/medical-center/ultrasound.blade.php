<html class="loaded" lang="es" style="--vh:5.7px; transform: none;">
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

<link rel="stylesheet" type="text/css" href="{{asset('assets/subadmin/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/subadmin/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/subadmin/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/subadmin/css/tables/datatable/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/subadmin/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/subadmin/css/pickers/flatpickr/flatpickr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/subadmin/css/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/subadmin/css/app-file-manager.min.css') }}">
<link rel="stylesheet" href="{{ url("assets/css/styles.css") }}">
<link rel="stylesheet" href="{{ asset('assets/xtras/swiperjs/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{asset('build/assets/css/main-43b567ae56.css')}}">
<link rel="stylesheet" href="{{asset('assets/subadmin/css/leaflet.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/subadmin/css/map-leaflet.css')}}">

<style>
    .StickySidebar:after {
        content: "";
        display: table;
        clear: both;
    }
</style>
</head>

<body class="subadmin-site vertical-layout content-left-sidebar navbar-floating footer-static pace-done menu-hide vertical-overlay-menu" data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" style="transform: none;">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg></a></li>
                </ul>

                <!--boton que copia una funcion-->
                <script>
                    //<![CDATA[
                    function getlink(login) {
                        var aux = document.createElement("input");
                        if (login == 'user') {
                            aux.setAttribute("value", 'http://localhost:8080/yoopey/public/business-module/auth/login/VkZaU1JsQlJQVDA9');
                        } else if (login == 'device') {
                            aux.setAttribute("value", 'http://localhost:8080/yoopey/public/business-module/auth/device-login/VkZaU1JsQlJQVDA9');
                        } else {
                            aux.setAttribute("value", 'Error');
                        }
                        document.body.appendChild(aux);
                        aux.select();
                        document.execCommand("copy");
                        document.body.removeChild(aux);
                    }
                    //]]>
                </script>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">
                                @php
                                $d = Auth::user()->persona_id;
                                $d1=\App\Persona::where('id', $d)->first();
                                @endphp
                                {{ $d1->nombre }} {{ $d1->apellido_paterno }} {{ $d1->apellido_materno }}</span>
                            <span class="user-status">{{Auth::user()->tipo}}</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="http://localhost:8080/yoopey/public/assets/admin/img/user.jpg" alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power mr-50">
                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                <line x1="12" y1="2" x2="12" y2="12"></line>
                            </svg> Cerrar Sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle mr-75">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg><span>No se encontraron resultados</span></div>
            </a>
        </li>
    </ul>

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="http://localhost:8080/api/public/medical-center/home">
                        <span class="brand-logo">
                            <img src="http://localhost:8080/api/public/assets/img/logo.png" height="38">
                        </span>
                        <h2 class="brand-text">Hospital</h2>

                    </a>
                </li>

            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content ps">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <br>
                <li class="nav-item  active ">

                    <a class="d-flex align-items-center" href="{{ url('medical-center/home') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboard">ATENCION</span></a>
                </li>
                <li class=" navigation-header">
                    <span data-i18n="Empresa">Administracion</span><i data-feather="more-horizontal"></i>
                </li>

                <li class="nav-item ">
                    <a class="d-flex align-items-center" href="{{ url('medical-center/medical-appointment') }}"><i data-feather='box'></i><span class="menu-title text-truncate" data-i18n="Mis dispositivos">Cita Medica</span></a>
                </li>
                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="{{ url('medical-center/medical-control') }}"><i data-feather='file-text'></i><span class="menu-title text-truncate" data-i18n="Mis Liquidaciones">Control Medico</span></a>
                </li>

                @php
                $d2 = Auth::user()->rol;
                @endphp
                @if($d2 == 'Admin')
                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="{{ url('medical-center/user') }}"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Mis Usuarios">Usuarios</span></a>
                </li>
                @endif



                <li class=" navigation-header">
                    <span data-i18n="Empresa">Agregar Nuevos</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="{{ url('medical-center/diagnosis') }}"><i data-feather='file-plus'></i><span class="menu-title text-truncate" data-i18n="Mis Liquidaciones">Causa</span></a>
                </li>

                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="{{ url('medical-center/ultrasound') }}"><i data-feather='file-plus'></i><span class="menu-title text-truncate" data-i18n="Mis Liquidaciones">Ecografia</span></a>
                </li>
                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="{{ url('medical-center/benefit') }}"><i data-feather='file-plus'></i><span class="menu-title text-truncate" data-i18n="Mis Liquidaciones">Prestaciones</span></a>
                </li>



            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </div>




    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content file-manager-application types_normal">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <section class="w-100">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="display: block">
                                <div class="row row_type">
                                    <div class="col-md-8 col-12">
                                        <h4 class="card-title">Mis Ecografias - Juan test Medico</h4>
                                        <br>
                                        <a href="http://localhost:8080/yoopey/public/business-module/see-liquidations/settlements-paid?start_date=2021-09-09&amp;&amp;end_date=2021-09-09&amp;&amp;pdf=1" class="btn btn-info mb-2 waves-effect waves-light  d-none "><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>&nbsp; Abonos PDF</a>
                                        <a href="http://localhost:8080/yoopey/public/business-module/see-liquidations/settlements-paid?start_date=2021-09-09&amp;&amp;end_date=2021-09-09&amp;&amp;excel=1" class="btn btn-success mb-2 waves-effect waves-light  d-none "><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>&nbsp; Abonos Excel</a>
                                    </div>
                                    <div style="position: absolute; padding: 0.586rem 1rem; right: 470px;">
                                        @if(session()->has('message_success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message_success') }}
                                        </div>
                                        @endif

                                    </div>



                                    <div class="col-12">
                                        <a href="{{ '#' }}" class="btn btn-outline-success waves-effect" id="new-device" data-toggle="modal" data-target="#modalCentered" title="Nueva Ecografia">
                                            <i data-feather='plus'></i> Nueva Ecografia
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table_default" class="table table_design table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>N°</center>
                                                </th>
                                                <th>
                                                    <center>NOMBRE</center>
                                                </th>
                                                <th>
                                                    <center>EDITAR</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($items as $key=>$item)
                                            <tr>
                                                <td>
                                                    <center>{{ $key+1 }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $item->tipo }}</center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <a class="btn btn-outline-success waves-effect" href="javascript:void(0);" data-item="{{ $item->id }}" data-toggle="modal" data-target="#modal_device_edit-{{ $item->id }}">
                                                            <i data-feather="edit-3" class="align-middle mr-50"></i>
                                                        </a>
                                                    </center>

                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--EDIT-->
    @foreach ($items as $key=>$item)
    <div class="modal fade" id="modal_device_edit-{{ $item->id }}" role="dialog" tabindex="-1" aria-labelledby="modaldevice-edit{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaldevice-edit{{ $item->id }}">Editar Ecografia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('medical-center/ultrasound/edit')}}" method="POST">
                        {{ csrf_field()}}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nombre de la ecografia (<span class="text-danger font-weight-bold">*</span>)</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="edit-3"></i></span>
                                        </div>
                                        <input type="text" id="name-{{ $item->id }}" class="form-control" name="name" placeholder="Escriba el nombre de dispositivo" value="@if(old('id')==$item->id){{ old('name', $item->tipo) }}@else{{ $item->tipo }}@endif" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer modal_footer-int">
                            <input type="hidden" hidden class="hidden invisible" name="csrf-token" id="csrf-token" value="{{ csrf_token() }}">
                            <input type="hidden" hidden readonly class="hidden invisible" name="id" id="id-{{ $item->id }}" value="{{ $item->id }}" data-device="{{ bin2hex(random_bytes(64)) }}">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="edit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach




    <!---->
    <style>
        .pagination li {
            margin-left: 1.50rem;
            margin-right: 1.50rem;
        }

        .pagination li a {
            border: 20.25rem;
            min-width: 20.25rem;
            text-align: center;
            color: #41B6C7;
        }

        .pagination li.active a,
        .pagination li a:hover {
            background-color: #1d97c9 !important;
            color: #fff;
        }

        .pagination [aria-current] {
            font-weight: bold;
            background-color: #FF00FF;
        }
    </style>
    <!--Modal de crear-->
    <div class="modal fade" id="modalCentered" tabindex="-1" role="dialog" aria-labelledby="modalCenteredTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenteredTitle">Crear Nueva Ecografia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <br>
                    <form action="{{url('medical-center/ultrasound/create')}}" method="POST">
                        {{ csrf_field()}}
                        <div class="row">
                            <br>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nombre De La Ecografia (<span class="text-danger font-weight-bold">*</span>)</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="edit-3"></i></span>
                                        </div>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Escriba el nombre de la ecografia" value="{{ old('name') }}" autocomplete="off" />
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="modal-footer modal_footer-int">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Crear Ecografia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!---Modal end-->
    <!-- END: Content-->

    <div class="sidenav-overlay" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
    <div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">© Hospital De La Mujer | Todos los derechos reservados. </span><span class="float-md-right d-block d-md-block">Desarrollado por:<a class="ml-25" href="https://www.facebook.com/garyhenry.furuyavelarde" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal">
                        <polyline points="4 17 10 11 4 5"></polyline>
                        <line x1="12" y1="19" x2="20" y2="19"></line>
                    </svg> Furuya</a></span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top waves-effect waves-float waves-light" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg></button>
    <!-- END: Footer-->
    <script src="{{ asset('assets/subadmin/js/vendors.min.js') }}"></script>

    <script src="{{ asset('assets/subadmin/js/select2.full.min.js') }}"></script>
    {{-- Scripts table init --}}
    @include('includes.table-scripts-init')
    @yield('middlescript')

    <script src="{{ asset('assets/subadmin/js/app-menu.js') }}"></script>
    <script src="{{ asset('assets/subadmin/js/app.js') }}"></script>


    {{-- Scripts customs --}}
    <script src="{{ asset('assets/subadmin/js/app-file-manager.js') }}"></script>
    <script src="{{ asset('assets/subadmin/js/components-collapse.min.js') }}"></script>


    {{-- Scripts table start --}}
    <script src="{{ asset('assets/subadmin/js/table-datatables-basic.js') }}"></script>

    <script src="{{ asset('assets/subadmin/js/components-modals.js') }}"></script>

    {{-- <script src="{{ asset('assets/xtras/featherlight/featherlight.js') }}"></script> --}}

    <script>
        $(function() {
            $('.sidebar-atn').StickySidebar({
                // Settings
                additionalMarginTop: 40
            });
        });


        (function($) {
            $.fn.StickySidebar = function(options) {
                var defaults = {
                    'containerSelector': '',
                    'additionalMarginTop': 0,
                    'additionalMarginBottom': 0,
                    'updateSidebarHeight': true,
                    'minWidth': 0,
                    'disableOnResponsiveLayouts': false,
                    'sidebarBehavior': 'modern'
                };
                options = $.extend(defaults, options);

                // Validate options
                options.additionalMarginTop = parseInt(options.additionalMarginTop) || 0;
                options.additionalMarginBottom = parseInt(options.additionalMarginBottom) || 0;

                tryInitOrHookIntoEvents(options, this);

                // Try doing init, otherwise hook into window.resize and document.scroll and try again then.
                function tryInitOrHookIntoEvents(options, $that) {
                    var success = tryInit(options, $that);

                    if (!success) {
                        console.log('TST: Body width smaller than options.minWidth. Init is delayed.');

                        $(document).scroll(function(options, $that) {
                            return function(evt) {
                                var success = tryInit(options, $that);

                                if (success) {
                                    $(this).unbind(evt);
                                }
                            };
                        }(options, $that));
                        $(window).resize(function(options, $that) {
                            return function(evt) {
                                var success = tryInit(options, $that);

                                if (success) {
                                    $(this).unbind(evt);
                                }
                            };
                        }(options, $that))
                    }
                }

                // Try doing init if proper conditions are met.
                function tryInit(options, $that) {
                    if (options.initialized === true) {
                        return true;
                    }

                    if ($('body').width() < options.minWidth) {
                        return false;
                    }

                    init(options, $that);

                    return true;
                }

                // Init the sticky sidebar(s).
                function init(options, $that) {
                    options.initialized = true;

                    // Add CSS
                    $('head').append($('<style>.StickySidebar:after {content: ""; display: table; clear: both;}</style>'));

                    $that.each(function() {
                        var o = {};

                        o.sidebar = $(this);

                        // Save options
                        o.options = options || {};

                        // Get container
                        o.container = $(o.options.containerSelector);
                        if (o.container.length == 0) {
                            o.container = o.sidebar.parent();
                        }

                        // Create sticky sidebar
                        o.sidebar.parents().css('-webkit-transform', 'none'); // Fix for WebKit bug - https://code.google.com/p/chromium/issues/detail?id=20574
                        o.sidebar.css({
                            'position': 'absolute',
                            'top': '0',
                            'overflow': 'visible',
                            // The "box-sizing" must be set to "content-box" because we set a fixed height to this element when the sticky sidebar has a fixed position.
                            '-webkit-box-sizing': 'border-box',
                            '-moz-box-sizing': 'border-box',
                            'box-sizing': 'border-box'
                        });

                        // Get the sticky sidebar element. If none has been found, then create one.
                        o.stickySidebar = o.sidebar.find('.StickySidebar');
                        if (o.stickySidebar.length == 0) {
                            o.sidebar.find('script').remove(); // Remove <script> tags, otherwise they will be run again on the next line.
                            o.stickySidebar = $('<div>').addClass('StickySidebar').append(o.sidebar.children());
                            o.sidebar.append(o.stickySidebar);
                        }

                        // Get existing top and bottom margins and paddings
                        o.marginTop = parseInt(o.sidebar.css('margin-top'));
                        o.marginBottom = parseInt(o.sidebar.css('margin-bottom'));
                        o.paddingTop = parseInt(o.sidebar.css('padding-top'));
                        o.paddingBottom = parseInt(o.sidebar.css('padding-bottom'));

                        // Add a temporary padding rule to check for collapsable margins.
                        var collapsedTopHeight = o.stickySidebar.offset().top;
                        var collapsedBottomHeight = o.stickySidebar.outerHeight();
                        o.stickySidebar.css('padding-top', 1);
                        o.stickySidebar.css('padding-bottom', 1);
                        collapsedTopHeight -= o.stickySidebar.offset().top;
                        collapsedBottomHeight = o.stickySidebar.outerHeight() - collapsedBottomHeight - collapsedTopHeight;
                        if (collapsedTopHeight == 0) {
                            o.stickySidebar.css('padding-top', 0);
                            o.stickySidebarPaddingTop = 0;
                        } else {
                            o.stickySidebarPaddingTop = 1;
                        }

                        if (collapsedBottomHeight == 0) {
                            o.stickySidebar.css('padding-bottom', 0);
                            o.stickySidebarPaddingBottom = 0;
                        } else {
                            o.stickySidebarPaddingBottom = 1;
                        }

                        // We use this to know whether the user is scrolling up or down.
                        o.previousScrollTop = null;

                        // Scroll top (value) when the sidebar has fixed position.
                        o.fixedScrollTop = 0;

                        // Set sidebar to default values.
                        resetSidebar();

                        o.onScroll = function(o) {
                            // Stop if the sidebar isn't visible.
                            if (!o.stickySidebar.is(":visible")) {
                                return;
                            }

                            // Stop if the window is too small.
                            if ($('body').width() < o.options.minWidth) {
                                resetSidebar();
                                return;
                            }

                            var scrollTop = $(document).scrollTop();
                            var position = 'static';

                            // If the user has scrolled down enough for the sidebar to be clipped at the top, then we can consider changing its position.
                            if (scrollTop >= o.container.offset().top + (o.paddingTop + o.marginTop - o.options.additionalMarginTop)) {
                                // The top and bottom offsets, used in various calculations.
                                var offsetTop = o.paddingTop + o.marginTop + options.additionalMarginTop;
                                var offsetBottom = o.paddingBottom + o.marginBottom + options.additionalMarginBottom;

                                // All top and bottom positions are relative to the window, not to the parent elemnts.
                                var containerTop = o.container.offset().top;
                                var containerBottom = o.container.offset().top + getClearedHeight(o.container);

                                // The top and bottom offsets relative to the window screen top (zero) and bottom (window height).
                                var windowOffsetTop = 0 + options.additionalMarginTop;
                                var windowOffsetBottom;

                                var sidebarSmallerThanWindow = (o.stickySidebar.outerHeight() + offsetTop + offsetBottom) < $(window).height();
                                if (sidebarSmallerThanWindow) {
                                    windowOffsetBottom = windowOffsetTop + o.stickySidebar.outerHeight();
                                } else {
                                    windowOffsetBottom = $(window).height() - o.marginBottom - o.paddingBottom - options.additionalMarginBottom;
                                }

                                var staticLimitTop = containerTop - scrollTop + o.paddingTop + o.marginTop;
                                var staticLimitBottom = containerBottom - scrollTop - o.paddingBottom - o.marginBottom;

                                var top = (o.stickySidebar.offset().top - scrollTop);
                                var scrollTopDiff = o.previousScrollTop - scrollTop;

                                // If the sidebar position is fixed, then it won't move up or down by itself. So, we manually adjust the top coordinate.
                                if (o.stickySidebar.css('position') == 'fixed') {
                                    if (o.options.sidebarBehavior == 'modern') {
                                        top += scrollTopDiff;
                                    }
                                }

                                if (o.options.sidebarBehavior == 'stick-to-top') {
                                    top = options.additionalMarginTop;
                                }

                                if (o.options.sidebarBehavior == 'stick-to-bottom') {
                                    top = windowOffsetBottom - o.stickySidebar.outerHeight();
                                }

                                if (scrollTopDiff > 0) { // If the user is scrolling up.
                                    top = Math.min(top, windowOffsetTop);
                                } else { // If the user is scrolling down.
                                    top = Math.max(top, windowOffsetBottom - o.stickySidebar.outerHeight());
                                }

                                top = Math.max(top, staticLimitTop);

                                top = Math.min(top, staticLimitBottom - o.stickySidebar.outerHeight());

                                // If the sidebar is the same height as the container, we won't use fixed positioning.
                                var sidebarSameHeightAsContainer = o.container.height() == o.stickySidebar.outerHeight();

                                if (!sidebarSameHeightAsContainer && top == windowOffsetTop) {
                                    position = 'fixed';
                                } else if (!sidebarSameHeightAsContainer && top == windowOffsetBottom - o.stickySidebar.outerHeight()) {
                                    position = 'fixed';
                                } else if (scrollTop + top - o.sidebar.offset().top - o.paddingTop <= options.additionalMarginTop) {
                                    // Stuck to the top of the page. No special behavior.
                                    position = 'static';
                                } else {
                                    // Stuck to the bottom of the page.
                                    position = 'absolute';
                                }
                            }

                            /*
                             * Performance notice: It's OK to set these CSS values at each resize/scroll, even if they don't change.
                             * It's way slower to first check if the values have changed.
                             */
                            var th = $('.header-navbar').innerHeight();
                            var inth = th - 18.200;
                            if (position == 'fixed') {
                                o.stickySidebar.css({
                                    'position': 'fixed',
                                    'width': o.sidebar.width(),
                                    'top': top,
                                    'left': o.sidebar.offset().left + parseInt(o.sidebar.css('padding-left'))
                                });
                                o.stickySidebar.find('.sidebar-inner').css('padding-top', `${inth}px`);


                            } else if (position == 'absolute') {
                                var css = {};

                                if (o.stickySidebar.css('position') != 'absolute') {
                                    css.position = 'absolute';
                                    css.top = scrollTop + top - o.sidebar.offset().top - o.stickySidebarPaddingTop - o.stickySidebarPaddingBottom;
                                }

                                css.width = o.sidebar.width();
                                css.left = '';

                                o.stickySidebar.css(css);
                            } else if (position == 'static') {
                                resetSidebar();
                                o.stickySidebar.find('.sidebar-inner').css('padding-top', '0');
                            }

                            if (position != 'static') {
                                if (o.options.updateSidebarHeight == true) {
                                    o.sidebar.css({
                                        'min-height': o.stickySidebar.innerHeight() + o.stickySidebar.offset().top - o.sidebar.offset().top + o.paddingBottom
                                    });
                                }
                            }

                            // Stop if the sidebar width is larger than the container width (e.g. the theme is responsive and the sidebar is now below the content)
                            if (o.options.disableOnResponsiveLayouts) {
                                // var sidebarWidth = o.sidebar.outerWidth(o.sidebar.css('float') == 'none');

                                // if (sidebarWidth + 50 > o.container.width()) {
                                //     resetSidebar();
                                //     return;
                                // }

                                var t1h = $('.header-navbar').innerHeight();
                                var i1nth = t1h + 18.200;
                                if (position == 'fixed') {
                                    o.stickySidebar.css({
                                        'left': 'unset',
                                        'right': '0'
                                    });
                                    o.stickySidebar.find('.sidebar-inner').css('padding-top', `${i1nth}px`);
                                    o.sidebar.css({
                                        'position': 'fixed',
                                        'top': `0px`
                                    });
                                } else if (position == 'absolute') {
                                    o.stickySidebar.find('.sidebar-inner').css('padding-top', `0px`);
                                } else if (position == 'static') {
                                    o.stickySidebar.find('.sidebar-inner').css('padding-top', `0px`);
                                }
                            }

                            o.previousScrollTop = scrollTop;
                        };

                        // Initialize the sidebar's position.
                        o.onScroll(o);

                        // Recalculate the sidebar's position on every scroll and resize.
                        $(document).scroll(function(o) {
                            return function() {
                                o.onScroll(o);
                            };
                        }(o));
                        $(window).resize(function(o) {
                            return function() {
                                o.stickySidebar.css({
                                    'position': 'static'
                                });
                                o.onScroll(o);
                            };
                        }(o));

                        // Reset the sidebar to its default state
                        function resetSidebar() {
                            o.fixedScrollTop = 0;
                            o.sidebar.css({
                                'min-height': '1px'
                            });
                            o.stickySidebar.css({
                                'position': 'static',
                                'width': ''
                            });
                        }

                        // Get the height of a div as if its floated children were cleared. Note that this function fails if the floats are more than one level deep.
                        function getClearedHeight(e) {
                            var height = e.height();

                            e.children().each(function() {
                                height = Math.max(height, $(this).height());
                            });

                            return height;
                        }
                    });
                }
            }
        })(jQuery);
    </script>
    <script>
        $("#view-radio-list").click();
    </script>

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

    <!--Buscadpor ajax-->

    <script type="text/javascript">
        $("#txtbusca").on('keyup', function(event) {
            event.preventDefault();
            var search = $(this).val();
            if ($.trim(search).length > 0) {
                $.ajax({
                    url: 'http://localhost:8080/yoopey/public/business-module/main-search',
                    method: 'get',
                    data: {
                        'search': search
                    },
                    success: function(response) {
                        $(".search-list").html(response.html);
                    },
                    statusCode: {
                        400: function(xhr) {
                            var json = JSON.parse(xhr.responseText);
                            if (json.errores.length) {
                                alert(json.errores);
                            }
                        }
                    }
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#table_default').DataTable({
                paging: false
            });
        });
    </script>


</body>

</html>