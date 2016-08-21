<?php
session_start();
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$sql = "SELECT * FROM proyectosasignados pa "
        . "INNER JOIN preguntas pr "
        . "on pa.idProyecto = pr.id "
        . "INNER JOIN usuarios u "
        . "on u.id = pr.idUsuario "
        . " where pa.idEvaluador = '1'";
$datos = mysql_query($sql);
?>
<!DOCTYPE html><!--[if IE 9 ]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Perfil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/vendor.css">
        <link rel="stylesheet" href="../styles/sweetalert.css"/>
        <script src="../scripts/vendor/modernizr.js"></script>
    </head>
    <body>
        <div >
            <section>
                <div class="app">
                    <div style="background:url(../images/profile.jpg) center center; background-size:cover;" class="unwrap">
                        <div class="container container-lg p-lg">
                            <div class="media mt-lg">
                                <div class="media-left media-middle"><a href=""><img src="../images/user/02.jpg" class="media-object thumb96 img-circle"></a></div>
                                <div class="media-body text-white">
                                    <h2 class="mv-lg media-heading">Evaluador</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="panel">
                                    <div class="panel-body">
                                        <h3>Pablo Torres</h3>
                                        <p>Administrador</p>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading no-shadow">Mis proyectos 
                                        <!--<i class="fa fa-2x fa-plus pull-right"></i>-->
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-block">
                                            <?php
                                            while ($rsE = mysql_fetch_array($datos)) {
                                                ?>
                                                <li class="media">
                                                    <div class="pull-left">
                                                        <!--Contact avatar-->
                                                        <div class="point-pin"><a href=""><img src="../images/user/01.jpg" alt="Image" class="media-object img-circle thumb32"></a>
                                                            <div class="point point-success point-lg"></div>
                                                        </div>
                                                    </div>
                                                    Información
                                                    <div class="media-body">
                                                        <div class="media-heading"><a onclick="mostrarProyectos(<?php echo $rsE[4];?>);" ><?php echo $rsE["nombreProyecto"]; ?></a></div>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="panel">
                                    <div id="informacion">
                                        <div class="panel-body">
                                            <h3 class="page-header">Mis Proyectos</h3>
                                            
                                            
                                            
                                            <div id="contenedor">
                                                
                                            </div>
                                            
                                            
                                            
                                        </div> 
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <div id="myModal" tabindex="-1"

             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <img class="img-responsive" src="../imagesGestion/fingif.gif"/>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/sweetalert.min.js"></script>
        <script src="../scripts/vendor.js"></script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>
        <script src="../jQuery/evaluador.js"></script>
        <!--<script src="../jQuery/administrador.js"></script>-->
        <!--<script src="../jQuery/perfil.js"></script>-->
    </body>
</html>