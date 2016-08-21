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
$sql = "SELECT * FROM compania WHERE idUsuario = '$idUsuario'";
$sqlPreguntas = "SELECT * FROM preguntas WHERE idUsuario = '$idUsuario'";
$datos = mysql_query($sql);
$datosPreguntas = mysql_query($sqlPreguntas);
if ($datos == false) {
    echo mysql_error();
} else {
    while ($rs = mysql_fetch_array($datos)) {
        $ocupacion = $rs["ocupacion"];
    }
}
if ($datosPreguntas == false) {
    echo mysql_error();
} else {
    while ($rsPreguntas = mysql_fetch_array($datosPreguntas)) {
        $mision = $rsPreguntas["mision"];
        $vision = $rsPreguntas["vision"];
        $valores = $rsPreguntas["valores"];
        $descripcion = $rsPreguntas["descripcionProyecto"];
    }
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
                            <!--                            <div class="pull-right">
                                                            <button type="button" class="btn btn-amber">Follow</button>
                                                        </div>-->
                            <div class="media mt-lg">
                                <div class="media-left media-middle"><a href=""><img src="../images/user/02.jpg" class="media-object thumb96 img-circle"></a></div>
                                <div class="media-body text-white">
                                    <h2 class="mv-lg media-heading"><?php echo $usuario; ?></h2>
                                    <!--                                    <button type="button" class="btn btn-info btn-xs mr-sm"> <em class="fa fa-twitter fa-fw"></em></button>
                                                                        <button type="button" class="btn btn-primary btn-xs mr-sm"> <em class="fa fa-facebook fa-fw"></em></button>
                                                                        <button type="button" class="btn btn-danger btn-xs"> <em class="fa fa-google-plus fa-fw"></em></button>-->
                                </div>
                            </div>
                            <!--                            <div class="text-right text-white pb-lg">
                                                            <p class="m0"><strong>2k followers</strong></p>
                                                            <p class="m0"><strong>1.3k following</strong></p>
                                                        </div>-->
                        </div>
                    </div>
                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="panel">
                                    <div class="panel-body">
                                        <h3><?php echo $nombre; ?></h3>
                                        <p><?php echo $ocupacion; ?></p>
                                        <?php
                                        if ($ocupacion != "") {
                                            ?>
                                        <a target="_blank" href="../pdf/pdf.pdf">Descargar pdf</a>

                                            <?php
                                        }
                                        ?>
<!--<p>It is a long established fact that a reader will be distracted.</p>-->
                                    </div>
                                </div>
                                <!--                                <div class="panel">
                                                                    <div class="panel-body">
                                                                        <h6><span><em class="fa fa-twitter mr"></em>@jdoe</span></h6>
                                                                        <h6><span class="mr"><em class="fa fa-clock-o mr"></em>10:05 PM</span><span class="mr"><em class="fa fa-calendar mr"></em>10/11/15</span><span class="mr"><em class="fa fa-map-marker mr"></em>BA</span></h6>
                                                                        <h6><span><em class="fa fa-eye mr"></em>10 feb at 10:00 AM</span></h6>
                                                                    </div>
                                                                </div>-->
                                <div class="panel">
                                    <div class="panel-heading no-shadow">Mentores asignados</div>
                                    <div class="panel-body">
                                        <ul class="list-block">
                                            <li class="media">
                                                <div class="pull-left">
                                                    <!--Contact avatar-->
                                                    <div class="point-pin"><a href=""><img src="../images/user/05.jpg" alt="Image" class="media-object img-circle thumb32"></a>
                                                        <div class="point point-success point-lg"></div>
                                                    </div>
                                                </div>
                                                Información
                                                <div class="media-body">
                                                    <div class="media-heading"><a href="">Juan Sims</a><br><small class="text-muted">Designeer</small></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="panel">
                                    <div id="informacion">
                                        <div class="panel-body">
                                            <ul role="tablist" class="nav nav-tabs">
                                                <li role="presentation" class="active"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Mi compania</a></li>
                                                <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>-->
                                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Mensajes</a></li>
                                                <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
                                            </ul>
                                            <div class="tab-content">
                                                <div id="activity" role="tabpanel" class="tab-pane fade in active">
                                                    <h4 class="page-header">Descripcion</h4>
                                                    <p><span><?php echo $descripcion; ?> </span>: John</p>
                                                    <p></p>
                                                    <h4 class="page-header">Mision</h4>
                                                    <p><?php echo $mision; ?></p>
                                                    <h4 class="page-header">Vision</h4>
                                                    <p><?php echo $vision; ?></p>
                                                    <h4 class="page-header">Valores</h4>
                                                    <p><?php echo $valores; ?></p>
                                                </div>
                                                <!--                                                <div id="profile" role="tabpanel" class="tab-pane fade">
                                                                                                    <div class="alert alert-info">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-8 col-sm-offset-2 text-center">
                                                                                                                <div class="lead m0 p-lg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="page-header">Basic information</h4>
                                                                                                    <div class="row">
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Name </span>: John</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Last Name </span>: Doe</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Birthday</span>: 21 Feb 1983</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Location </span>: Paris, France</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Occupation </span>: UX Developer</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Email </span>: john@doemail.com</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Mobile Phone</span>: (123) 456 789</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Home Phone </span>:  (+123) 654 987</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <h4 class="page-header">Company information</h4>
                                                                                                    <div class="row">
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Name </span>: Company Name</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Branch </span>: Dublin</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Address </span>: Some st, 456</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Email </span>: company@doemail.com</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Phone</span>: (+123) 456 789</p>
                                                                                                        </div>
                                                                                                        <div class="col-xs-6">
                                                                                                            <p><span>Fax</span>:  (+123) 654 987</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>-->
                                                <div id="messages" role="tabpanel" class="tab-pane fade">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <p>
                                                                <button type="button" class="mr btn btn-amber btn-sm btn-circle">M</button><em>Mauris a velit id neque dignissim congue. Curabitur imperdiet consequat hendrerit. </em>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <p>
                                                                <button type="button" class="mr btn btn-success btn-sm btn-circle">J</button><em>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vulputate neque non turpis pellentesque mattis. </em>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <p><a href="" class="btn btn-image btn-circle btn-sm mr"><img src="../images/user/01.jpg" class="img-responsive img-circle"></a><em>Nullam quis lorem a est auctor venenatis vel vitae ipsum. Fusce pellentesque congue justo in rutrum. Etiam adipiscing, purus ultricies ornare vulputate, quam felis commodo nisl, ut posuere massa turpis ut erat. </em></p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <p>
                                                                <button type="button" class="mr btn btn-pink btn-sm btn-circle">K</button><em>In cursus cursus lacus, ut faucibus leo pellentesque et. Proin eget quam ante. Etiam odio ante, placerat eu accumsan ut, consectetur vel mi. </em>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <p>
                                                                <button type="button" class="mr btn btn-purple btn-sm btn-circle">M</button><em>Mauris eleifend, libero nec cursus lacinia, tellus est pharetra orci, et pretium urna felis eget neque. </em>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <p>
                                                                <button type="button" class="mr btn btn-warning btn-sm btn-circle">L</button><em>Nullam ultricies, urna ac aliquet fringilla, eros velit vehicula elit, at faucibus velit erat eu ante. Praesent congue nisi in metus malesuada nec dictum nunc egestas. Donec nec magna a diam eleifend facilisis non in urna. </em>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--                                                <div id="settings" role="tabpanel" class="tab-pane fade">
                                                                                                    <form role="form" class="form-horizontal">
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">First Name</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="f-name" type="text" placeholder=" " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">Last Name</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="l-name" type="text" placeholder=" " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">About Me</label>
                                                                                                            <div class="col-lg-10">
                                                                                                                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">Country</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="c-name" type="text" placeholder=" " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">Birthday</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="b-day" type="text" placeholder=" " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">Occupation</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="occupation" type="text" placeholder=" " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">Email</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="email" type="text" placeholder=" " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">Mobile</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="mobile" type="text" placeholder=" " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-lg-2 control-label">Website URL</label>
                                                                                                            <div class="col-lg-6">
                                                                                                                <input id="url" type="text" placeholder="http://example.com " class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                                                                                <button type="button" class="btn btn-purple">Cancel</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>-->
                                            </div>
                                        </div> 
                                    </div>
                                    <div id="registro">
                                        <div class="app">
                                            <div class="app-view-header">Bienvenido<small>Te ayudamos a completar tu registro</small></div>
                                            <div class="panel-body">
                                                <form id="example-form" action="#" class="hidden form-wizard">
                                                    <div>
                                                        <h3>Compania</h3>
                                                        <section>
                                                            <label for="userName">Nombre de la compania</label>
                                                            <input id="txtNombreCompania" type="text" class="form-control ">
                                                            <label for="userName">Ocupación</label>
                                                            <input id="txtOcupacion"  type="text" class="form-control ">
                                                            <label for="userName">Dirección</label>
                                                            <input id="txtDireccion"  type="text" class="form-control ">
                                                            <label for="userName">Estado</label>
                                                            <input id="txtEstado"  type="text" class="form-control ">
                                                            <label for="userName">Telefono</label>
                                                            <input id="txtTelefono"  type="text" class="form-control ">
                                                        </section>
                                                        <h3>Información del proyecto</h3>
                                                        <section>
                                                            <label for="userName">Descripción del proyecto</label>
                                                            <textarea id="txtDescripcionProyecto" rows="5" class="form-control" placeholder="Descripcion del proyecto..."></textarea>
                                                            <label for="userName">Descripción del proyecto</label>
                                                            <input type="text" id="txtClaves" class="form-control"/>
                                                            <label for="userName">Inversion Inicial</label>
                                                            <input id="txtInversionInicial" type="text" class="form-control"/>
                                                            <label for="userName">Dinero requerido</label>
                                                            <input id="txtDineroRequerido" type="text" class="form-control"/>
                                                        </section>
                                                        <h3>Misión, Visión, Valores</h3>
                                                        <section>
                                                            <label for="userName">Misión</label>
                                                            <textarea id="txtMision" rows="5" class="form-control" placeholder="Misión"></textarea>
                                                            <label for="userName">Visión</label>
                                                            <textarea id="txtVision" rows="5" class="form-control" placeholder="Misión"></textarea>
                                                            <label for="userName">Valores</label>
                                                            <textarea id="txtValores" rows="5" class="form-control" placeholder="Misión"></textarea>
                                                        </section>
                                                    </div>
                                                </form>
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
        <script src="../jQuery/perfil.js"></script>
    </body>
</html>