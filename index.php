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
        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
        <!--<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>-->
        <!--<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>-->
        <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
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
                            <img src="../logoChico/logo.png" alt="App Logo" class="brand-logo"/>
                        </a>
                        <div class="mobile-toggles">
                        </div>
                    </div>
                    <div id="nav-collapse" class="nav-wrapper collapse navbar-collapse">
                        <ul class="nav navbar-nav hidden-material">
                            <li>
                                <!--<a><label style="font-family: 'Lobster', cursive; font-size: 30px">Dream Cards</label></a>-->
                                <a><label style="font-family: 'Playball', cursive; font-size: 30px">Dream Cards</label></a>
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
                                        <li><a href="#slider" title="Slider" data-ripple=""><em class="sidebar-item-icon"></em><span>Slider</span></a></li>
                                        <li><a href="#faqs" title="Slider" data-ripple=""><em class="sidebar-item-icon"></em><span>Faqs</span></a></li>
                                        <li><a href="#feedBacks" title="Slider" data-ripple=""><em class="sidebar-item-icon"></em><span>FeedBack</span></a></li>
                                        <li><a href="#nosotros" title="Nosotros" data-ripple=""><em class="sidebar-item-icon"></em><span>Nosotros</span></a></li>
                                        <li><a href="#trabajos" title="Trabajos" data-ripple=""><em class="sidebar-item-icon"></em><span>Ultimos Trabajos</span></a></li>
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
                    <div ng-view="">

                    </div>
                </div>
            </section>
            <footer><span>&copy; 2016 - Dream Cards</span></footer>
        </div>
        <script src="scripts/vendor.js"></script>
        <script src="scripts/plugins.js"></script>
        <script src="scripts/main.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/angular-route.min.js"></script>
        <script src="js/angular-cookies.js"></script>
        <script src="jsConfig/app.js"></script>
        <!------------------------------------------------>
        <script src="jsController/ctrSlider.js"></script>
        <script src="jsController/ctrFaqs.js"></script>
        <script src="jsController/ctrFeedBack.js"></script>
        <script src="jsController/ctrNosotros.js"></script>
        <script src="jsController/ctrClientes.js"></script>
        <script src="jsController/ctrUltimosTrabajos.js"></script>
        <script src="jsController/ctrLigas.js"></script>
        <script src="jsController/ctrLogin.js"></script>
        <script src="jsController/ctrCerrarSesion.js"></script>
        <script src="jsController/ctrEquipos.js"></script>
    </body>
</html>