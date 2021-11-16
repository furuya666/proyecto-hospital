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
  <div class="app-content content file-manager-application types_normal" style="transform: none;">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>


    <div class="content-area-wrapper" style="transform: none;">
      <div class="mainContent" style="transform: none;">
        <div class="content-left">
          <div class="card in_content-left">




            <div class="card-body">
              <div class="content-wrapper">
                <div class="content-body">
                  <div class="file-manager-main-content">
                    <div class="file-manager-content-header d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center w-100">
                        <div class="sidebar-toggle d-block d-xl-none float-left align-middle ml-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid font-medium-5">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                          </svg>
                        </div>

                      </div>
                    </div>

                    <h4 class="p-0 m-0" style="position: relative;">Mis Citas Medicas</h4>

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

                        @if(session()->has('message_success'))
                        <div class="alert alert-success" style="padding: 0.586rem 1rem; right: -160px;">
                          {{ session()->get('message_success') }}
                        </div>
                        @endif



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

                            <div class="custom-checkbox" title="Seleccionar dispositivo">
                              <div>
                                <svg class="icon-map" data-name="Map Marker" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 654.92 980" width="40" height="40">
                                  <path class="second-fill" d="M334.42,980h-14a14.71,14.71,0,0,0-1.92-.51c-26.72-3.44-48.12-15.83-61.33-39.52-9.77-17.54-17.68-36.13-26.28-54.32q-32.34-68.34-64.54-136.74-27.16-57.52-54.39-115-29.33-62-58.65-124.06C42.16,486.2,30.89,462.64,20,438.9,5.73,407.64,1.65,374.23.26,340.35a361.25,361.25,0,0,1,2.63-58.24,303.71,303.71,0,0,1,24.44-88.56c19.75-44,49.06-80.82,85-112.72C137,58.9,164,40.65,194.14,27.17a308,308,0,0,1,89-24.71C292.24,1.35,301.35,1,310.42,0h34C354,1,363.6,1.29,373.17,2.51a310,310,0,0,1,64.37,15.17c51.63,18.25,94.74,49.1,131.86,89,22.5,24.2,41.25,50.83,55.45,80.63,19.31,40.53,28.71,83.43,29.91,128.17a377.13,377.13,0,0,1-2.88,60.26c-2.93,21.86-7.69,43.22-17,63.28q-27,57.9-54.41,115.59Q537.7,645.1,494.94,735.56,475,777.74,455,819.9,427.4,878.33,399.8,936.77c-5.7,12-14.56,21.34-25.49,28.77A86.65,86.65,0,0,1,334.42,980ZM490.55,326.06c1.92-86.75-74-159.88-157.86-162.43-90.95-2.78-168.27,73.77-168.83,161.46C163.29,413.58,239.12,489,327,489.39,412.3,489.78,492.32,417,490.55,326.06Z" />
                                  <circle class="white-fill" cx="327.46" cy="326.47" r="206.25" />
                                  <text class="second-fill" x="50%" y="36%" dominant-baseline="middle" text-anchor="middle" font-family="sans-serif" font-weight="900" font-size="275">{{ $key+1 }}</text>
                                </svg>
                              </div>
                            </div>


                            <div class="card-img-top file-logo-wrapper">
                              <div class="dropdown float-right" title="Más opciones">
                                <i data-feather="more-vertical" class="mt-n25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item edit-branch-office" href="javascript:void(0);" data-item="{{ $item->id }}" data-toggle="edit" data-target="#edit-{{ $item->id }}">
                                    <i data-feather="edit-3" class="align-middle mr-50"></i> ATENDER CITA
                                  </a>
                                  <a class="dropdown-item delete-device text-success" href="javascript:void(0);" data-item="{{ $item->id }}" data-toggle="modal" data-target="#modal_device_edit1-{{ $item->id }}">
                                    <i data-feather="check-circle" class="align-middle mr-50"></i> ATENDIDO
                                  </a>
                                  <a class="dropdown-item delete-device text-danger" href="javascript:void(0);" data-item="{{ $item->id }}" data-toggle="modal" data-target="#modal_device_edit-{{ $item->id }}">
                                    <i data-feather="x-circle" class="align-middle mr-50"></i> CANCELAR CITA
                                  </a>


                                </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-center w-100 item_nlist" data-toggle="modal" data-target="#modal_device-{{ $item->id }}">
                                <div title="{{ $item->name }}">
                                  <img src="{{ asset('assets/img/user_default-2.png') }}" alt="User">
                                </div>
                                @php
                                $d = \App\Paciente::where('id', $item->paciente_id)->first();
                                $d1=\App\Persona::where('id', $d->persona_id)->first();
                                @endphp

                                <span title="Monto actual en el dispositivo">CI: {{$d1->ci}}<br> HORA: {{$item->hora}} </span>

                              </div>
                            </div>

                            <div class="n_nnon w-100" data-toggle="modal" data-target="#modal_device-{{ $item->id }}">
                              <div class="card-body types_body">
                                <div class="content-wrapper">

                                  <p class="card-text file-name mb-0" title="{{ $item->hora }}"> <small class="file-accessed text-muted">NOMBRE:</small> {{ $d1->nombre }}<br><small class="file-accessed text-muted">APELLIDOS:</small> {{ $d1->apellido_paterno}} {{ $d1->apellido_materno}}

                                  </p>

                                </div>

                              </div>
                            </div>

                            <div class="s_ssis w-100" data-toggle="modal" data-target="#modal_device-{{ $item->id }}">
                              <div class="card-body types_body">
                                <div class="content-wrapper">
                                  <p class="card-text file-name mb-0" title="{{ $item->name }} - ID: {{ $item->device_identifier}}">NOMBRE: {{ $item->nombre }} APELLIDOS: {{ $item->apellido_paterno}} {{ $item->apellido_materno}}</p>
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
        <!--CANCELAR CITA-->
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
                <form action="{{url('medical-center/medical-appointment/cancel')}}" method="POST">
                  {{ csrf_field()}}
                  <div class="row d-flex justify-content-center">
                    <h4>¿Estás seguro de cancelar la cita medica?</h4>

                  </div>
                  <div class=" modal-footer modal_footer-int">
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

        <!--ATENDIDO-->
        @foreach ($items as $key=>$item)
        <div class="modal fade" id="modal_device_edit1-{{ $item->id }}" role="dialog" tabindex="-1" aria-labelledby="modaldevice-edit{{ $item->id }}" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">




              <div class="modal-header">
                <h5 class="modal-title" id="modaldevice-edit{{ $item->id }}">Terminar Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{url('medical-center/medical-appointment/attended')}}" method="POST">
                  {{ csrf_field()}}
                  <div class="row d-flex justify-content-center">
                    <h4>¿Estás seguro de terminar la cita medica?</h4>

                  </div>
                  <div class=" modal-footer modal_footer-int">
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
        <!--main aside-->
        <div class="sidebar-right d-xl-block d-none text-left sidebar-file-manager sidebar-atn">
          <div class="">
            <div class="sidebar-inner">
              <div class="sidebar-list">
                <div class="list-group">
                  <div class="collapse-margin content_collapse-mastview p-1 pt-0 pb-0">
                    <div class="card">
                      <div class="card-header nav_item" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="lead collapse-title"><i data-feather="chevron-right"></i> &nbsp; Citas En Espera </span>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                        <div class="card-body">
                          <span class="list-group-item pad-type_2 row_type align_centr justify_centr title_in">
                            <span class="w-100_70 align-middle">NOMBRE</span>
                            <b class="w-70_100 text-center">CI</b>
                          </span>
                          @foreach ($items as $item)
                          <a href="javascript:void(0)" class="list-group-item pad-type_2 list-group-item-action row_type align_centr justify_centr" title="{{ $item->name}}">
                            <span class="w-100_70">
                              @php
                              $d = \App\Paciente::where('id', $item->paciente_id)->first();
                              $d1=\App\Persona::where('id', $d->persona_id)->first();
                              @endphp

                              <span class="align-middle hide_one-line align-middle">{{ $d1->nombre }} {{ $d1->apellido_paterno }}</span>
                            </span>

                            <b class="w-70_100">{{ $d1->ci }} </b>
                          </a>
                          @endforeach
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header nav_item" id="headingSecond" data-toggle="collapse" role="button" data-target="#collapseSecond" aria-expanded="true" aria-controls="collapseSecond">
                        <span class="lead collapse-title"><i data-feather="chevron-right"></i> &nbsp; Citas Canceladas </span>
                      </div>
                      <div id="collapseSecond" class="collapse show" aria-labelledby="headingSecond">
                        <div class="card-body">
                          <span class="list-group-item pad-type_2 row_type align_centr justify_centr title_in">
                            <span class="w-100_70 align-middle">NOMBRE</span>
                            <b class="w-70_100 text-center">CI</b>
                          </span>
                          @foreach ($items2 as $item)
                          <a href="javascript:void(0)" class="list-group-item pad-type_2 list-group-item-action row_type align_centr justify_centr" title="{{ $item->name}}">
                            <span class="w-100_70">
                              @php
                              $d = \App\Paciente::where('id', $item->paciente_id)->first();
                              $d1=\App\Persona::where('id', $d->persona_id)->first();
                              @endphp

                              <span class="align-middle hide_one-line align-middle">{{ $d1->nombre }} {{ $d1->apellido_paterno }}</span>
                            </span>

                            <b class="w-70_100">{{ $d1->ci }} </b>
                          </a>
                          @endforeach
                          </span>

                        </div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="sticky-stopper"></div>
      </div>

    </div>
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
              $d2=\App\Ecografia::where('id',$item->ecografia_id)->first();
              $d3=\App\Prestacion::where('id',$item->prestacion_id)->first();
              date_default_timezone_set('America/Virgin');
              $a = date('h:i:s:a', time());
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
                  <small class="noselect_text">Fecha De Atencion</small>
                  <span>{{ $item->fecha }}</span>
                </p>
                <p>
                  <small class="noselect_text">Prestacion</small>
                  <span>{{ $item->hora  }}</span>
                </p>
                <p>
                  <small class="noselect_text">Estado</small>
                  <span>{{ $item->estado }}</span>
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
                  <span>{{ $d3->tipo}}</span>
                </p>


                <!--https://www.php.net/manual/es/function.explode.php-->


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
  <script>
    $('.device-item').on('click', 'a', function(event) {
      event.preventDefault();
      var download = $(this).data('download');
      window.location.href = download;
    });
  </script>
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
  <script type="text/javascript">
    $(".edit-branch-office").on('click', function(event) {
      event.preventDefault();
      var item = $(this).data('item');
      if (item > 0) {
        window.location.href = "{{ url('medical-center/create_medical/') }}/" + item;
      }
    });
  </script>



  <!---->



  <!----->

  <!--<script>
    setTimeout("document.location=document.location",200000000);
    </script>
  -->
</body>

</html>