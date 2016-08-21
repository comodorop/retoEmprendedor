<?php
session_start();
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$ocupacion = "No asignado";
$idUsuario = $_SESSION["idUsuario"];
$usuario = $_SESSION["usuario"];
$nombre = $_SESSION["nombre"];
$mision = "";
$vision = "";
$valores = "";
$descripcion = "";
//$sql = "SELECT * FROM compania WHERE idUsuario = '$idUsuario'";
$sqlPreguntas = "SELECT * FROM preguntas pr
        INNER JOIN usuarios u on 
        pr.idUsuario = u.id ";
$sqlEvaluador = "SELECT * FROM evaluador";
$datosEvaluador = mysql_query($sqlEvaluador);
$datosEvaluadorT = mysql_query($sqlEvaluador);
if ($datosEvaluador == false) {
    echo mysql_error();
}
//$datos = mysql_query($sql);
$datosPreguntas = mysql_query($sqlPreguntas);
//if ($datos == false) {
//    echo mysql_error();
//} else {
//    while ($rs = mysql_fetch_array($datos)) {
//        $ocupacion = $rs["ocupacion"];
//    }
//}
if ($datosPreguntas == false) {
    echo mysql_error();
} else {
//    while ($rsPreguntas = mysql_fetch_array($datosPreguntas)) {
//        $mision = $rsPreguntas["mision"];
//        $vision = $rsPreguntas["vision"];
//        $valores = $rsPreguntas["valores"];
//        $descripcion = $rsPreguntas["descripcionProyecto"];
//    }
}
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
                                    <h2 class="mv-lg media-heading"><?php echo $usuario; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="panel">
                                    <div class="panel-body">
                                        <h3><?php echo $nombre; ?></h3>
                                        <p>Administrador</p>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading no-shadow">Evaluadores disponibles <i class="fa fa-2x fa-plus pull-right"></i></div>
                                    <div class="panel-body">
                                        <ul class="list-block">
                                            <?php
                                            while ($rsE = mysql_fetch_array($datosEvaluador)) {
                                                ?>
                                                <li class="media">
                                                    <div class="pull-left">
                                                        <!--Contact avatar-->
                                                        <div class="point-pin"><a href=""><img src="../images/user/<?php echo $rsE["imagen"]; ?>" alt="Image" class="media-object img-circle thumb32"></a>
                                                            <div class="point point-success point-lg"></div>
                                                        </div>
                                                    </div>
                                                    Información
                                                    <div class="media-body">
                                                        <div class="media-heading"><a href=""><?php echo $rsE["nombre"]; ?></a></div>
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
                                            <ul role="tablist" class="nav nav-tabs">
                                                <li role="presentation" class="active"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Proyectos registrados</a></li>
                                                <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>-->
                                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Asignacion de proyectos</a></li>
                                                <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
                                            </ul>
                                            <div class="tab-content">
                                                <div id="activity" role="tabpanel" class="tab-pane fade in active">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                        <th>Proyecto</th>
                                                        <th>Nombre</th> 
                                                        <th>Dinero requrido</th>
                                                        </thead>
                                                        <?php while ($rsPreguntas = mysql_fetch_array($datosPreguntas)) { ?>
                                                            <tr>
                                                                <td><?php echo $rsPreguntas["nombreProyecto"]; ?></td>
                                                                <td><?php echo $rsPreguntas["nombre"]; ?></td>
                                                                <td><?php echo $rsPreguntas["dineroRequrido"]; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                                <div id="messages" role="tabpanel" class="tab-pane fade">
                                                    <select id="cmbMentor" class="form-control">
                                                        <option>Seleccione Mentor</option>
                                                        <?php
                                                        while ($r = mysql_fetch_array($datosEvaluadorT)) {
                                                            ?>
                                                            <option value="<?php echo $r["idEvaluador"]; ?>"><?php echo $r["nombre"]; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <br>
                                                    <select class="form-control" id="cmbProyectosNoAsignados">
                                                        <option>Proyectos sin asignar</option>
                                                    </select>
                                                    <br>
                                                    <div id="contenedor">

                                                    </div>
                                                    
                                                    
                                                    <div class="clearfix"></div>
                                                </div> 

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
        <script src="../jQuery/administrador.js"></script>
        <!--<script src="../jQuery/perfil.js"></script>-->
    </body>
</html>