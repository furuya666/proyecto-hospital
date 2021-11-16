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
<style type="text/css">
    #mapContainer {
        width: 100%;
        height: 350px;
    }

    #mapCanvas {
        width: 100%;
        height: 100%;
    }

    @media (max-width: 767px) {
        .file-manager-application .content-area-wrapper .file-manager-main-content .file-manager-content-body {
            padding: 0;
        }
    }
</style>
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
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item nav-search nav-item d-lg-block">
                        <a class="nav-link nav-link-search"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search ficon">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></a>
                        <div class="search-input">
                            <div class="search-input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg></div>
                            <input class="form-control input" id="txtbusca" autocomplete="off" name="search" type="text" placeholder="Buscar..." tabindex="-1" data-search="search">
                            <div class="search-input-close"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></div>

                            <ul class="search-list search-list-main ps">


                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </ul>

                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block ml-1">
                        <a href="http://localhost:8080/api/public/medical-center/home" class="btn   btn-primary  waves-effect waves-float waves-light" style="padding: 0.586rem 1rem;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg> Inicio</a>
                    </li>
                    <li class="nav-item d-lg-block ml-1">
                        <a href="http://localhost:8080/yoopey/public/business-module/home/stadistic-charts" class="btn btn-outline-success waves-effect" style="padding: 0.586rem 1rem;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg> Reportes</a>


                    <li class="nav-item d-lg-block ml-1">

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
                            <span class="user-name font-weight-bolder">Juan Mamani Ajat</span>
                            <span class="user-status">Medico</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="http://localhost:8080/yoopey/public/assets/admin/img/user.jpg" alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="http://localhost:8080/yoopey/public/business-module/my-account/1354351278">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-50">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg> Editar Perfil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://localhost:8080/yoopey/public/business-module/auth/logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power mr-50">
                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                <line x1="12" y1="2" x2="12" y2="12"></line>
                            </svg> Cerrar Sesión
                        </a>
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
         
        <a class="d-flex align-items-center" href="{{ url('medical-center/home') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Inicio</span></a>
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

        <li class=" nav-item ">
          <a class="d-flex align-items-center" href="{{ url('medical-center/user') }}"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Mis Usuarios">Usuarios</span></a>
        </li>
        <li class=" nav-item ">
        <a class="d-flex align-items-center" href="{{ url('medical-center/report') }}"><i data-feather='file-text'></i><span class="menu-title text-truncate" data-i18n="Mis Liquidaciones">Reporte</span></a>
        </li>

       
        <li class=" navigation-header">
                        <span data-i18n="Empresa">Agregar Nuevos</span><i data-feather="more-horizontal"></i>
        </li>

        <li class=" nav-item ">
        <a class="d-flex align-items-center" href="{{ url('medical-center/diagnosis') }}"><i data-feather='file-plus'></i><span class="menu-title text-truncate" data-i18n="Mis Liquidaciones">Diagnostico</span></a>
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
                                        <h4 class="card-title">Mis Reportes - Juan test Medico</h4>
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
                                    
                                    <div class="col-12">
                                        <form method="GET" action="http://localhost:8080/yoopey/public/business-module/see-liquidations/settlements-paid?start_date=2021-09-09&amp;&amp;end_date=2021-09-09&amp;&amp;" accept-charset="UTF-8" id="form-filter">
                                            <h4 class="card-title">Fecha:
                                                <span class="pickerdate_input">
                                                    <input class="datepicker" name="start_date" type="date" value="2021-09-09" data-value="2021-09-09">
                                                </span>
                                                <span class="pickerdate_input">
                                                    <input class="datepicker" name="end_date" type="date" value="2021-09-09" data-value="2021-09-09">
                                                </span>
                                                <button type="submit" id="btn_date" class="btn btn-success waves-effect waves-light"><i class="far fa-calendar-alt"></i>Ir</button>
                                            </h4>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="table_default_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6"></div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="table_default_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="form-control" placeholder="" aria-controls="table_default"></label></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="table_default" class="table table_design table-hover dataTable no-footer" role="grid" aria-describedby="table_default_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="table_default" rowspan="1" colspan="1" aria-sort="ascending" aria-label="N°: activate to sort column descending" style="width: 34.0104px;"><center>N°</center></th>
                                                            <th class="sorting" tabindex="0" aria-controls="table_default" rowspan="1" colspan="1" aria-label="Sucursal: activate to sort column ascending" style="width: 86.25px;"><center>Nombre</center></th>
                                                            <th class="sorting" tabindex="0" aria-controls="table_default" rowspan="1" colspan="1" aria-label="ID Dispositivo: activate to sort column ascending" style="width: 131.441px;"><center>Apellidos</center></th>
                                                            <th class="sorting" tabindex="0" aria-controls="table_default" rowspan="1" colspan="1" aria-label="Monto: activate to sort column ascending" style="width: 68.0903px;"><center>Ci</center></th>
                                                            <th class="sorting" tabindex="0" aria-controls="table_default" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" style="width: 64.6875px;"><center>Fecha</center></th>
                                                            <th class="sorting" tabindex="0" aria-controls="table_default" rowspan="1" colspan="1" aria-label="Descargar PDF: activate to sort column ascending" style="width: 140.469px;"><center>Descargar PDF</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td valign="top" colspan="8" class="dataTables_empty">No data available in table</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="table_default_info" role="status" aria-live="polite">Mostrando 0 a 0 de 0 resultados</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/vendors.min.js"></script>

    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/select2.full.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/jszip.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/pdfmake.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/vfs_fonts.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/buttons.print.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/jstree.min.js"></script>

    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/app-menu.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/app.js"></script>


    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/app-file-manager.js"></script>
    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/components-collapse.min.js"></script>


    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/table-datatables-basic.js"></script>

    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/components-modals.js"></script>


    <script src="http://localhost:8080/yoopey/public/assets/subadmin/js/jquery.sticky.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaLzWbrRu2mktt_Ho3ejDUxRMss-51wBc"></script>
    <script>
        $('.device-item').on('click', 'a', function(event) {
            event.preventDefault();
            var download = $(this).data('download');
            window.location.href = download;
        });
    </script>
    <script>
        function initMap() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the web page
            map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
            map.setTilt(50);



            // Multiple markers location, latitude, and longitude
            var markers = [
                ['Furuya', -16.49569744327672, -68.13315685975464],
                ['Sucursal Los Pinos', -16.545385945760806, -68.07272018617948],
                ['Sucursal Achumani', -16.527346391549415, -68.0732674355909],
            ];

            // Info window content
            var infoWindowContent = [
                ['<div class="info_content">' + '<h4><b>Furuya</b></h4>' + '<p>Bs. 1234.5</p>' + '</div>'],
                ['<div class="info_content">' + '<h4><b>Sucursal Los Pinos</b></h4>' + '<p>Bs. 1234.5</p>' + '</div>'],
                ['<div class="info_content">' + '<h4><b>Sucursal Achumani</b></h4>' + '<p>Bs. 1234.5</p>' + '</div>'],
            ];

            // Add multiple markers to map
            var infoWindow = new google.maps.InfoWindow(),
                marker, i;

            // Place each marker on the map
            for (i = 0; i < markers.length; i++) {

                var icon = `<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 654.92 980" width="38" height="49"><defs><style>.white-color{fill:#fff;}</style></defs><title>map-marker</title><path fill="#009db3" d="M334.42,980h-14a14.71,14.71,0,0,0-1.92-.51c-26.72-3.44-48.12-15.83-61.33-39.52-9.77-17.54-17.68-36.13-26.28-54.32q-32.34-68.34-64.54-136.74-27.16-57.52-54.39-115-29.33-62-58.65-124.06C42.16,486.2,30.89,462.64,20,438.9,5.73,407.64,1.65,374.23.26,340.35a361.25,361.25,0,0,1,2.63-58.24,303.71,303.71,0,0,1,24.44-88.56c19.75-44,49.06-80.82,85-112.72C137,58.9,164,40.65,194.14,27.17a308,308,0,0,1,89-24.71C292.24,1.35,301.35,1,310.42,0h34C354,1,363.6,1.29,373.17,2.51a310,310,0,0,1,64.37,15.17c51.63,18.25,94.74,49.1,131.86,89,22.5,24.2,41.25,50.83,55.45,80.63,19.31,40.53,28.71,83.43,29.91,128.17a377.13,377.13,0,0,1-2.88,60.26c-2.93,21.86-7.69,43.22-17,63.28q-27,57.9-54.41,115.59Q537.7,645.1,494.94,735.56,475,777.74,455,819.9,427.4,878.33,399.8,936.77c-5.7,12-14.56,21.34-25.49,28.77A86.65,86.65,0,0,1,334.42,980ZM490.55,326.06c1.92-86.75-74-159.88-157.86-162.43-90.95-2.78-168.27,73.77-168.83,161.46C163.29,413.58,239.12,489,327,489.39,412.3,489.78,492.32,417,490.55,326.06Z"/><circle class="white-color" cx="327.46" cy="326.47" r="206.25"/><text x="50%" y="36%" dominant-baseline="middle" text-anchor="middle" font-family="sans-serif" font-weight="900" font-size="280" fill="#009db3">${i+1}</text></svg>`;

                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    icon: 'data:image/svg+xml;charset=UTF-8;base64,' + btoa(icon),
                    title: markers[i][0],
                    optimized: false
                });

                markerExt = new google.maps.Marker({
                    map: map
                });
                console.log(markerExt);

                var amb = marker;
                var int = i;
                // Add info window to marker
                google.maps.event.addListener(amb, 'click', (function(amb, int) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[int][0]);
                        infoWindow.open(map, amb);
                    }
                })(amb, int));

                // Center the map to fit all markers on the screen
                map.fitBounds(bounds);
            }

            // Set zoom level
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(12.4);
                google.maps.event.removeListener(boundsListener);
            });

        }
        // Load initialize function
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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


</body>

</html>