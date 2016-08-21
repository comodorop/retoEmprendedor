<!DOCTYPE html><!--[if IE 9 ]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Naut - Bootstrap Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/vendor2.css">
        <script src="../scripts/vendor/modernizr.js"></script>
        <link rel="stylesheet" href="../styles/sweetalert.css"/>
        <!-- GMaps api-->
        <!--<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>-->
    </head>
    <body>
        <div id="login" class="animated fadeOutZoom">
            <div class="container container-sm animated fadeInDown">
                <div class="center-block mt-xl">

                    <div class="panel">
                        <div class="panel-body">
                            <img src="../imagesGestion/logo500.png" alt="Image" 
                                 style="margin-top: 20px; margin-bottom: 20px"
                                 class=" img-responsive center-block ">
                      <!--<p class="pv text-bold">LOGIN CREDENTIALS</p>-->
                            <!--<form role="form" class="mb-lg">-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback mb">
                                        <input id="txtEmailL" 
                                               type="email" placeholder="Your email" 
                                               autocomplete="off" class="form-control">
                                        <span class="fa fa-envelope form-control-feedback text-muted"></span>
                                    </div><br>
                                    <div class="form-group has-feedback">
                                        <input id="txtPasswordL" 
                                               type="password"
                                               placeholder="Your password" 
                                               class="form-control"><span class="fa fa-lock form-control-feedback text-muted"></span>
                                    </div>
                                    <!--                                        <div class="checkbox c-checkbox pull-left mt0">
                                                                                <label>
                                                                                    <input type="checkbox" value=""><span class="fa fa-check"></span> Remember me
                                                                                </label>
                                                                            </div>-->
                                </div>
                                <div class="col-md-6">
                                    <button id="loguearse"  type="submit" class="btn btn-block btn-info mb">Acceder</button>
                                    <p class="text-muted mb0">¿No tienes cuenta?</p>
                                    <a href="#" id="lknRegistro" class="btn btn-block btn-default">
                                        <strong>Registrate aquí</strong></a>
                                </div>
                            </div>
                            <!--</form>-->
                        </div>
                    </div>
                    <!--<div class="text-center mt"><a href="page.recover.html" class="text-muted">Forgot your password?</a></div>-->
                    <div class="p-lg text-center">
                        <hr><span class="mr-sm">&copy; </span><span class="mr-sm">2015</span><span>Reto</span><br>Emprendedor
                    </div>
                </div>
            </div>
        </div>
        <div id="registro" class="animated fadeOutZoom">
            <div class="container container-sm animated fadeInDown">
                <div class="center-block mt-xl">
                    <!-- START panel-->
                    <!--<img src="images/logo-gray.png" alt="Image" class="center-block img-rounded">-->
                    <div class="panel">
                        <div class="panel-body">
                            <img src="../imagesGestion/logo500.png" alt="Image" 
                                 style="margin-top: 20px; margin-bottom: 20px"
                                 class=" img-responsive center-block ">
                            <p class="pv text-bold">REGISTRATE</p>
                            <form role="form" class="mb-lg">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <input id="txtNombreR"
                                                   type="text" 
                                                   placeholder="Nombre" 
                                                   autocomplete="off" 
                                                   class="form-control">
                                            <span class="fa fa-user form-control-feedback text-muted"></span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input id="txtEmailR" 
                                                   type="email" 
                                                   placeholder="Correo" 
                                                   autocomplete="off" class="form-control">
                                            <span class="fa fa-envelope form-control-feedback text-muted">
                                            </span>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input id="txtPassR" 
                                                   type="password" 
                                                   placeholder="Contraseña" autocomplete="off" class="form-control"><span class="fa fa-lock form-control-feedback text-muted"></span>
                                        </div>

                                        <div class="clearfix">
                                            <div class="checkbox c-checkbox pull-left mt0">
                                                <label>
                                                    <input type="checkbox" value=""><span class="fa fa-check"></span> Acepto terminos y  <a href="">condiciones</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">       
                                        <button type="submit" id="btnRegistrarse" class="btn btn-block btn-primary">Crear Cuenta</button><br>
                                        <p class="pt-lg text-center mt-sm">¿Ya tienes cuenta?</p><a  id="btnAcceder" class="btn btn-block btn-default"><strong>Acceder</strong></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END panel-->
                    <div class="p-lg text-center">
                        <hr><span class="mr-sm">&copy; </span><span class="mr-sm">2015</span><span>Naut</span><br>Bootstrap + AngularJS
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/sweetalert.min.js"></script>
        <script src="../scripts/vendor.js"></script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>
        <script src="../jQuery/registro.js"></script>
    </body>
</html>