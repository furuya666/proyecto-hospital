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
    {{-- <link rel="stylesheet" href="{{ asset('assets/subadmin/css/subadmin.css') }}"> --}}

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



</head>

<body class="subadmin-site vertical-layout content-left-sidebar navbar-floating footer-static pace-done menu-hide vertical-overlay-menu" data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">
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
                    <a class="d-flex align-items-center" href="{{ url('medical-center/diagnosis') }}"><i data-feather='file-plus'></i><span class="menu-title text-truncate" data-i18n="Mis Liquidaciones">Causas</span></a>
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
            <div class="mainContent">
                <div class="card in_content-left">
                    <div class="card-body">
                        <div class="content-wrapper">
                            <div class="content-body">
                                <div class="file-manager-main-content">
                                    <div class="file-manager-content-header d-flex justify-content-between align-items-center mb-1">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="sidebar-toggle d-block d-xl-none float-left align-middle ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid font-medium-5">
                                                    <rect x="3" y="3" width="7" height="7"></rect>
                                                    <rect x="14" y="3" width="7" height="7"></rect>
                                                    <rect x="14" y="14" width="7" height="7"></rect>
                                                    <rect x="3" y="14" width="7" height="7"></rect>
                                                </svg>
                                            </div>

                                            <div style="position: absolute; padding: 0.586rem 1rem; right: 470px;">
                                                @if(session()->has('message_success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message_success') }}
                                                </div>
                                                @endif

                                            </div>
                                            <div class="input-group input-group-merge shadow-none m-0 flex-grow-1 w-100">
                                                <h4 class="p-0 m-0" style="position: relative;">Mis Citas Medicas</h4>
                                                <a href="#" class="btn btn-outline-success waves-effect" data-toggle="modal" data-target="#modalCentered" title="Nueva sucursal" style="position: absolute; padding: 0.586rem 1rem; right: 0px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg> Nueva Cita Medica
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="file-manager-content-body">


                                        <div class="view-container">
                                            <div class="file-manager-content-header search_head d-flex justify-content-between align-items-center" style="width:100%">
                                                <div class="d-flex align-items-center content_search-list">
                                                    <div class="input-group input-group-merge shadow-none m-0 flex-grow-1">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text border-0">
                                                                <i data-feather="search"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control files-filter border-0 bg-transparent" placeholder="Search" />
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center content_btns-selection">

                                                    <div class="btn-group btn-group-toggle view-toggle ml-50" data-toggle="buttons">
                                                        <label class="btn btn-outline-primary p-50 btn-sm active">
                                                            <input type="radio" name="view-btn-radio" data-view="grid" checked />
                                                            <i data-feather="grid"></i>
                                                        </label>
                                                        <label class="btn btn-outline-primary p-50 btn-sm">
                                                            <input type="radio" name="view-btn-radio" data-view="list" />
                                                            <i data-feather="list"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divider_sections"></div>

                                            <h6 class="files-section-title mt-25 mb-75">Citas Medicas</h6>

                                            <div class="divider_sections"></div>

                                            <div class="files-header type_more-space">
                                                <div class="two_champs">
                                                    <h6 class="font-weight-bold mb-0">Dispositivo</h6>
                                                    <h6 class="font-weight-bold file-item-size d-inline-block mb-0">Estado</h6>
                                                    <h6 class="font-weight-bold d-inline-block mr-1 mb-0 in_options">Actions</h6>
                                                </div>
                                            </div>

                                            <div class="row w-100" style="margin: 0;">
                                                @foreach ($items as $key=>$item)
                                                <div class="card file-manager-item folder type_user noselect_text">


                                                    <div class="card-img-top file-logo-wrapper">
                                                        <div class="dropdown float-right" title="Más opciones">
                                                            <i data-feather="more-vertical" class="mt-n25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item edit-device" data-toggle="modal" data-target="#modalCentered1-{{ $item->id }}" title="Nuevo dispositivo">
                                                                    <i data-feather="edit-3" class="align-middle mr-50"></i> EDITAR CITA
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-center justify-content-center w-100 item_nlist" data-toggle="modal" data-target="#modal_device-{{ $item->id }}">
                                                            <div title="{{ $item->name }}">
                                                                <img src="{{ asset('assets/img/user_default-2.png') }}" class="mt-n25" alt="User">
                                                            </div>
                                                            @php
                                                            $d = \App\Paciente::where('id', $item->paciente_id)->first();
                                                            $d1=\App\Persona::where('id', $d->persona_id)->first();
                                                            $d2=\App\Ecografia::where('id',$item->ecografia_id)->first();
                                                            $d3=\App\Prestacion::where('id',$item->prestacion_id)->first();
                                                            @endphp



                                                            <span title="Monto actual en el dispositivo">CI: {{$d1->ci}} </span>
                                                        </div>
                                                    </div>

                                                    <div class="n_nnon w-100" data-toggle="modal" data-target="#modal_device-{{ $item->id }}">
                                                        <div class="card-body types_body">
                                                            <div class="content-wrapper">

                                                                <p class="card-text file-name mb-0" title="{{ $item->hora }}"> <small class="file-accessed text-muted">NOMBRE:</small> {{ $d1->nombre }}<br><small class="file-accessed text-muted">APELLIDOS:</small> {{ $d1->apellido_paterno}} {{ $d1->apellido_materno}}
                                                                    <br>
                                                                    <small class="file-accessed text-muted">ECOGRAFIAS:</small>
                                                                    @foreach(json_decode($item->ecografias, true) as $rol)
                                                                    @php
                                                                    $d2=\App\Ecografia::where('id',$rol)->first();
                                                                    @endphp
                                                                    <span>{{$d2->tipo }} </span>
                                                                    @endforeach
                                                                    <br>
                                                                    <small class="file-accessed text-muted">PRESTACION:</small> {{ $d3->tipo }}
                                                                </p>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="s_ssis w-100" data-toggle="modal" data-target="#modal_device-{{ $item->id }}">
                                                        <div class="card-body types_body">
                                                            <div class="content-wrapper">
                                                                <p class="card-text file-name mb-0" title="{{ $item->name }} - ID: {{ $item->device_identifier}}">NOMBRE: {{ $item->nombre }} APELLIDOS: {{ $item->apellido_paterno}} {{ $item->apellido_materno}}</p>
                                                            </div>
                                                            <div class="content-wrapper justify_centr-important">
                                                                <p class="card-text file-size mb-0 ind_status" @if('1'==$item->active) title="Dispositivo Activo" @else title="Dispositivo Inactivo" @endif>
                                                                    <i class="point-status @if('1' == $item->active) connected @endif"></i>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>


                                            <div class="d-none flex-grow-1 align-items-center no-result mb-3">
                                                <i data-feather="alert-circle" class="mr-50"></i>
                                                No se encontrarón resultados
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal de crear-->
            <div class="modal fade" id="modalCentered" tabindex="-1" role="dialog" aria-labelledby="modalCenteredTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenteredTitle">Crear Nueva Cita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                        </div>
                        <div class="modal-body">
                            <form action="{{url('medical-center/medical-appointment/create')}}" method="POST">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Ci (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="ci" placeholder="Ci de paciente" name="ci" type="text" value="" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Nombres (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="name" placeholder="Nombre de paciente" name="name" type="text" value="" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Apellido Paterno (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="ape_pat" placeholder="Apellido de paciente" name="ape_pat" type="text" value="" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Apellido Materno (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="ape_mat" placeholder="Apellido de paciente" name="ape_mat" type="text" value="" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Edad (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="edad" placeholder="Edad de paciente" name="edad" type="text" value="" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Fecha De Consulta (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="fecha" placeholder="Fecha" name="fecha" type="date" value="" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Hora De Consulta (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="hora" placeholder="Fecha" name="hora" type="time" value="" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-icon">Seleccione Tipo De Prestacion (<span class="text-danger font-weight-bold">*</span>)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i data-feather='map'></i></span>
                                                </div>
                                                <select class="max-length-multiple form-control form-control-lg" name="prestacion_id" id="c" data-live-search="true">
                                                    <option value="">Seleccione</option>
                                                    @foreach($items6 as $item)
                                                    <option value="{{ $item->id }}" @if(old('$item->id')==$item->id) selected @endif>{{ $item->tipo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-icon">Seleccione Tipo De Ecografia (<span class="text-danger font-weight-bold">*</span>)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i data-feather='map'></i></span>
                                                </div>
                                                <select class="max-length-multiple form-control form-control-lg" name="ecografia_id" id="c" data-live-search="true">
                                                    <option value="">Seleccione</option>
                                                    @foreach($items3 as $item)
                                                    <option value="{{ $item->id }}" @if(old('$item->id')==$item->id) selected @endif>{{ $item->tipo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="formulario">
                                        <label for="Material">Seleccione Tipo De Ecografias </label>
                                        <button type="button" class="clonar btn btn-success btn-sm">+</button>
                                        <br>
                                        <br>

                                        <div class="input-group">

                                            <label class="form-control col-md-6 ">Ecografia: </label>

                                            <select class="form-control col-md-6" name="ecografia[]" id="b">

                                                <option value="">Seleccione</option>
                                                @foreach($items3 as $item5)
                                                <option value="{{ $item5->id }}" @if(old('$item5->id')==$item5->id) selected @endif>{{ $item5->tipo }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                </div>
                                <div class="modal-footer modal_footer-int">
                                    <button type="button" class="btn btn-danger waves-effect waves-float waves-light" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Crear Cita</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <!--EDIT-->
            @foreach ($items as $key=>$item)
            <div class="modal fade" id="modal_device_edit-{{ $item->id }}" role="dialog" tabindex="-1" aria-labelledby="modaldevice-edit{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">




                        <div class="modal-header">
                            <h5 class="modal-title" id="modaldevice-edit{{ $item->id }}">Cancelar Cita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('medical-center/medical-appointment/edit')}}" method="POST">
                                {{ csrf_field()}}
                                <div class="row d-flex justify-content-center">
                                    <h4>¿Estás seguro de cancelar la cita medica?</h4>

                                </div>
                                <div class="modal-footer modal_footer-int">
                                    <input type="hidden" hidden class="hidden invisible" name="csrf-token" id="csrf-token" value="{{ csrf_token() }}">
                                    <input type="hidden" hidden readonly class="hidden invisible" name="id" id="id-{{ $item->id }}" value="{{ $item->id }}" data-device="{{ bin2hex(random_bytes(64)) }}">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    <button type="submit" id="edit" class="btn btn-primary">Si</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach




            <!---->
            <!--MOSTRAR MODAL-->
            @foreach ($items as $key=>$item)

            <div class="modal fade" id="modal_device-{{ $item->id }}" role="dialog" tabindex="-1" aria-labelledby="modaldevice{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaldevice{{ $item->id }}">Cita Medica</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card_bx">

                                <div class="cardbx-header">
                                    <div title="{{ $item->name }}">
                                        <img src="{{ asset('assets/img/user_default-2.png') }}" alt="User" width="150px">
                                    </div>
                                    <br>


                                </div>

                                @php
                                $d = \App\Paciente::where('id', $item->paciente_id)->first();
                                $d1=\App\Persona::where('id', $d->persona_id)->first();
                                $d3=\App\Prestacion::where('id',$item->prestacion_id)->first();
                                @endphp
                                <div class="cardbox-content">
                                    <p>
                                        <small class="noselect_text">CI</small>
                                        <span>{{ $d1->ci }}</span>
                                    </p>
                                    <p>
                                        <small class="noselect_text">Nombre</small>
                                        <span>{{ $d1->nombre }}</span>
                                    </p>
                                    <p>
                                        <small class="noselect_text">Apellido Paterno</small>
                                        <span>{{ $d1->apellido_paterno }}</span>
                                    </p>
                                    <p>
                                        <small class="noselect_text">Apellido Materno</small>
                                        <span>{{ $d1->apellido_materno }}</span>
                                    </p>
                                    <p>
                                        <small class="noselect_text">Edad</small>
                                        <span>{{ $d->edad }}</span>
                                    </p>
                                    <p>
                                        <small class="noselect_text">Fecha De Atencion</small>
                                        <span>{{ $item->fecha }}</span>
                                    </p>
                                    <p>
                                        <small class="noselect_text">Hora De Atencion</small>
                                        <span>{{ $item->hora }}</span>
                                    </p>
                                    <p>
                                        <small class="noselect_text">Ecografias</small>
                                        @foreach(json_decode($item->ecografias, true) as $rol)
                                        @php
                                        $d2=\App\Ecografia::where('id',$rol)->first();
                                        @endphp
                                        <span>{{$d2->tipo }} </span>

                                        @endforeach
                                    </p>
                                    <p>
                                        <small class="noselect_text">Prestacion</small>
                                        <span>{{ $d3->tipo }}</span>
                                    </p>




                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!---->

            <!--EDITAR-->

            @foreach ($items as $key=>$item)
            <div class="modal fade" id="modalCentered1-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalCenteredTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenteredTitle">Editar Cita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{url('medical-center/medical-appointment/edit')}}" method="POST">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Ci (*)</label>
                                            @php
                                            $d = \App\Paciente::where('id', $item->paciente_id)->first();
                                            $d1=\App\Persona::where('id', $d->persona_id)->first();
                                            $d2=\App\Ecografia::where('id',$item->ecografia_id)->first();
                                            $d3=\App\Prestacion::where('id',$item->prestacion_id)->first();
                                            @endphp
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="ci" placeholder="Ci de paciente" name="ci" type="text" value="{{$d1->ci}}" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Nombres (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="name" placeholder="Nombre de paciente" name="name" type="text" value="{{$d1->nombre}}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Apellido Paterno (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="ape_pat" placeholder="Apellido de paciente" name="ape_pat" type="text" value="{{$d1->apellido_paterno}}" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Apellido Materno (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="ape_mat" placeholder="Apellido de paciente" name="ape_mat" type="text" value="{{$d1->apellido_materno}}" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Edad (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="edad" placeholder="Edad de paciente" name="edad" type="text" value="{{$d->edad}}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Fecha De Consulta (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="fecha" placeholder="Fecha" name="fecha" type="date" value="{{$item->fecha}}" required="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">

                                            <label for="name">Hora De Consulta (*)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg></span>
                                                </div>
                                                <input class="form-control input-lg " id="fecha" placeholder="Fecha" name="hora" type="time" value="{{$item->hora}}" required="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-icon">Seleccione Tipo De Ecografia (<span class="text-danger font-weight-bold">*</span>)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i data-feather='map'></i></span>
                                                </div>
                                                <input class="form-control input-lg " id="ape_mat" placeholder="Apellido de paciente" name="ecografia_id" type="text" value="{{$d2->tipo}}" required="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-icon">Seleccione Tipo De Prestacion (<span class="text-danger font-weight-bold">*</span>)</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i data-feather='map'></i></span>
                                                </div>
                                                <input class="form-control input-lg " id="ape_mat" placeholder="Apellido de paciente" name="prestacion_id" type="text" value="{{$d3->tipo}}" required="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer modal_footer-int">
                                    <input type="hidden" hidden class="hidden invisible" name="csrf-token" id="csrf-token" value="{{ csrf_token() }}">
                                    <input type="hidden" hidden readonly class="hidden invisible" name="id" id="id-{{ $item->id }}" value="{{ $item->id }}" data-device="{{ bin2hex(random_bytes(64)) }}">

                                    <button type="button" class="btn btn-danger waves-effect waves-float waves-light" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!---->

        </div>
    </div>
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


    <script src="{{ asset('assets/subadmin/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/subadmin/js/leaflet.min.js') }}"></script>
    <script src="{{asset('assets/subadmin/js/vendors.min.js')}}"></script>
    <script src="{{asset('assets/subadmin/js/app-menu.js')}}"></script>
    <script src="{{asset('assets/subadmin/js/app.js')}}"></script>
    <script src="{{asset('assets/subadmin/js/app-file-manager.js')}}"></script>

    <script src="{{ asset('assets/subadmin/js/select2.full.min.js') }}"></script>
    <script>
        (function(window, document, $) {
            'use strict';
            var select = $('.js-example-basic-multiple');
            select.wrap('<div class="position-relative int_select"></div>').select2({
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: select.parent(),
                placeholder: 'Seleccione'
            });
        })(window, document, jQuery);

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script type="text/javascript">
        $(".edit-branch-office").on('click', function(event) {
            event.preventDefault();
            var item = $(this).data('item');
            if (item > 0) {
                window.location.href = "http://localhost:8080/yoopey/public/business-module/branch-office/edit/" + item;
            }
        });

        $("#city").change(function(event) {
            getZones($(this).val());
        });

        function getZones(city, zone_id = null) {
            var zone = $("#zone");
            $.ajax({
                url: 'http://localhost:8080/yoopey/public/business-module/zones/' + city + '/' + zone_id,
                method: 'get',
                data: {
                    'city': city
                },
                beforeSend: function() {
                    zone.attr('disabled', true);
                },
                success: function(response) {
                    zone.attr('disabled', false).html(response.item);
                    $('.js-example-basic-multiple').select2();
                },
                statusCode: {
                    400: function(xhr) {
                        alert('none');
                        $(".alert").remove();
                        var json = JSON.parse(xhr.responseText);
                        if (json.errores.length) {
                            form.prepend('<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">' + json.errores + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                }
            });
        }
    </script>

    <script type="text/javascript">
        $('.checkbox-branch-office').on('change', function(event) {
            event.preventDefault();
            var id = $(this).attr('id');
            if ($(this).is(':checked')) {
                $(this).clone().appendTo('#form-check-inputs');
            } else {
                $('#form-check-inputs').children('#' + id).remove();
            }
            $('#btn-check-pdf').attr('href', 'http://localhost:8080/yoopey/public/business-module/branch-office?' + $('#form-checkbox').serialize() + '&pdf=1');
            $('#btn-check-excel').attr('href', 'http://localhost:8080/yoopey/public/business-module/branch-office?' + $('#form-checkbox').serialize() + '&excel=1');
        });
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
    <script type="text/javascript">
        var idleTime = 0;
        $(document).ready(function() {
            // var idleInterval = setInterval(timerIncrement, 300000);
            var idleInterval = setInterval(timerIncrement, 1800000);

            $(this).mousemove(function(e) {
                idleTime = 0;
            });
            $(this).keypress(function(e) {
                idleTime = 0;
            });
        });

        function timerIncrement() {
            idleTime = idleTime + 1;
            if (idleTime > 1) {
                window.location.href = 'http://localhost:8080/yoopey/public/auth/logout';
            }
        }
    </script>

    <script>
        (function(window, document, $) {
            'use strict';
            var select = $('#c');
            select.wrap('<div class="position-relative int_select"></div>').select2({
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: select.parent(),
                placeholder: 'Seleccione'
            });
        })(window, document, jQuery);

        $(document).ready(function() {
            $('#c').select2();
        });
    </script>

    <link rel="stylesheet" type="text/css" property="stylesheet" href="//localhost:8080/yoopey/public/_debugbar/assets/stylesheets?v=1626182770">
    <script type="text/javascript" src="//localhost:8080/yoopey/public/_debugbar/assets/javascript?v=1626182770"></script>
    <script type="text/javascript">
        jQuery.noConflict(true);
    </script>
    <script>
        $('.clonar').click(function() {
            // Clona el .input-group
            var $clone = $('#formulario .input-group').last().clone();

            // Borra los valores de los inputs clonados
            $clone.find('select').each(function() {
                if ($(this).is('label')) {
                    this.selectedIndex = 0;
                } else {
                    this.value = '';
                }
            });

            // Agrega lo clonado al final del #formulario
            $clone.appendTo('#formulario');

        });
    </script>
</body>

</html>