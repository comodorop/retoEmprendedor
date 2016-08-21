<!DOCTYPE html><!--[if IE 9 ]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js" ><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Naut - Bootstrap Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/vendor.css">
        <link rel="stylesheet" href="styles/sweetalert.css"/>
        <script src="scripts/vendor/modernizr.js"></script>
        <!-- GMaps api-->
        <!--<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>-->
        <!--<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>-->
        <!--<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>-->
        <!--<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>-->
    </head>
    <body ng-app="dreamCards">
        <!-- Main container-->
        <div class="app-container">
            <!-- top navbar-->
            <header class="bg-primary">
                <!-- START Top Navbar-->
                <nav role="navigation" class="navbar topnavbar">
                    <div class="navbar-header">
                        <a href="#home" class="navbar-brand"> 
                            <img src="imagesGestion/logo200.png" alt="App Logo" class="brand-logo"/>
                        </a>
                        <div class="mobile-toggles">
                        </div>
                    </div>
                    <div id="nav-collapse" class="nav-wrapper collapse navbar-collapse">
                        <ul class="nav navbar-nav hidden-material">
                            <li>
                                <!--<a><label style="font-family: 'Lobster', cursive; font-size: 30px">Dream Cards</label></a>-->
                                <a><label style="font-family: 'Playball', cursive; font-size: 30px">Reto emprendedor</label></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Sidebar-->
            <aside class="bg-white">
                <!-- START Sidebar-->
                <div class="sidebar-wrapper">
                    <div data-ui-sidebar="" class="sidebar">
                        <div class="sidebar-nav">
                            <ul class="nav">
                                <!--<li><a href="#" title="Cards" data-ripple=""><em class="sidebar-item-icon icon-stack"></em><span>Cards</span></a></li>-->
                                <li><a title="Layouts" data-ripple=""><em class="sidebar-item-caret fa pull-right fa-angle-right"></em><em class="sidebar-item-icon icon-layout"></em><span>Web</span></a>
                                    <ul class="nav sidebar-subnav">
                                        <li><a id="lknProyectos" title="Slider" data-ripple=""><em class="sidebar-item-icon"></em><span>Proyectos</span></a></li>
<!--                                        <li><a href="#faqs" title="Slider" data-ripple=""><em class="sidebar-item-icon"></em><span>Faqs</span></a></li>
                                        <li><a href="#feedBacks" title="Slider" data-ripple=""><em class="sidebar-item-icon"></em><span>FeedBack</span></a></li>
                                        <li><a href="#nosotros" title="Nosotros" data-ripple=""><em class="sidebar-item-icon"></em><span>Nosotros</span></a></li>
                                        <li><a href="#trabajos" title="Trabajos" data-ripple=""><em class="sidebar-item-icon"></em><span>Ultimos Trabajos</span></a></li>-->
<!--                                        <li><a href="#faqs" title="Full Height" data-ripple=""><em class="sidebar-item-icon"></em><span>Faqs</span></a></li>
                                        <li><a href="#feed" title="Full Height" data-ripple=""><em class="sidebar-item-icon"></em><span>Feed Backs</span></a></li>
                                        <li><a href="#ultimosTrabajos" title="Full Height" data-ripple=""><em class="sidebar-item-icon"></em><span>Ultimos trabajos</span></a></li>
                                        <li><a href="#ligas" title="Full Height" data-ripple=""><em class="sidebar-item-icon"></em><span>Ligas</span></a></li>
                                        <li><a href="#ultimosTrabajos" title="Full Height" data-ripple=""><em class="sidebar-item-icon"></em><span>Ultimos trabajos</span></a></li>-->
                                    </ul>
                                </li>
                                <li><a title="Layouts" data-ripple=""><em class="sidebar-item-caret fa pull-right fa-angle-right"></em><em class="sidebar-item-icon icon-layout"></em><span>Gestion</span></a>
                                    <ul class="nav sidebar-subnav">
                                        <li><a href="#clientes" title="Clientes" data-ripple=""><em class="sidebar-item-icon"></em><span>Clientes</span></a></li>
                                        <li><a href="#ligas" title="Ligas" data-ripple=""><em class="sidebar-item-icon"></em><span>Ligas</span></a></li>
                                        <li><a href="#equipos" title="Equipos" data-ripple=""><em class="sidebar-item-icon"></em><span>Equipos</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                <li><a href="#cerrarSesion" title="Slider" data-ripple=""><em class="sidebar-item-icon"></em><span>Cerrar Sesion</span></a></li>
                               <!--<a title="Layouts" data-ripple=""><em class="sidebar-item-caret fa pull-right fa-angle-right"></em><em class="sidebar-item-icon icon-layout"></em><span>Gestion</span></a>-->
                                <!--                                    <ul class="nav sidebar-subnav">
                                                                       
                                                                    </ul>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END Sidebar-->
            </aside>
            <!-- Main-->
            <section>
                <!-- Content-->
                <div class="app">
<!--                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row row-flush text-center text-muted m0">
                                    <div data-ripple="" class="col-xs-3 col-md-6 bb br pv-xxl clickable bg-primary"><em class="icon-pie-graph fa-2x mv"></em></div>
                                    <div data-ripple="" class="col-xs-3 col-md-6 bb br pv-xxl clickable"><em class="icon-head fa-2x mv"></em></div>
                                    <div data-ripple="" class="col-xs-3 col-md-6 bb-lg br pv-xxl clickable"><em class="icon-share fa-2x mv"></em></div>
                                    <div data-ripple="" class="col-xs-3 col-md-6 bb-lg br pv-xxl clickable"><em class="icon-briefcase fa-2x mv"></em></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row row-table">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="p">
                                            <div class="row row-flush text-center">
                                                <div class="col-xs-6">
                                                    <p class="mt-lg">Monthly Income</p>
                                                    <div data-percent="75" class="easypie"><span>75</span></div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <p class="mt-lg">Total Income</p>
                                                    <div data-percent="50" class="easypie"><span>50</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="p">Hourly 
                                            <div class="progress progress-xs">
                                                <div style="width: 35%" class="progress-bar progress-bar-warning"></div>
                                            </div>Last Month
                                            <div class="progress progress-xs">
                                                <div style="width: 10%" class="progress-bar progress-bar-info"></div>
                                            </div>Last Year
                                            <div class="progress progress-xs m0">
                                                <div style="width: 35%" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div id="contenedor">

                    </div>
                </div>
            </section>
            <footer><span>&copy; 2016 - Dream Cards</span></footer>
        </div>
        <script src="scripts/vendor.js"></script>
        <script src="scripts/plugins.js"></script>
        <script src="scripts/main.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="jQuery/index.js"></script>
<!--        <script src="js/angular.min.js"></script>
        <script src="js/angular-route.min.js"></script>
        <script src="js/angular-cookies.js"></script>
        <script src="jsConfig/app.js"></script>-->
        <!------------------------------------------------>
<!--        <script src="jsController/ctrSlider.js"></script>
        <script src="jsController/ctrFaqs.js"></script>
        <script src="jsController/ctrFeedBack.js"></script>
        <script src="jsController/ctrNosotros.js"></script>
        <script src="jsController/ctrClientes.js"></script>
        <script src="jsController/ctrUltimosTrabajos.js"></script>
        <script src="jsController/ctrLigas.js"></script>
        <script src="jsController/ctrLogin.js"></script>
        <script src="jsController/ctrCerrarSesion.js"></script>
        <script src="jsController/ctrEquipos.js"></script>-->
    </body>
</html>