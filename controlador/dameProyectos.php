<?php
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$id = $_GET["id"];
$sql = "SELECT * FROM proyectosasignados pa "
        . "INNER JOIN preguntas pr "
        . "on pa.idProyecto = pr.id "
        . "INNER JOIN usuarios u "
        . "on u.id = pr.idUsuario "
        . " where pa.idEvaluador = '$id'";
$datos = mysql_query($sql);
if ($datos == false) {
    echo mysql_error();
} else {
    while ($rs = mysql_fetch_array($datos)) {
        $idProyecto = $rs["idProyecto"];
        $sqlDameMentores = "SELECT * FROM proyectosasignados pa "
                . "INNER JOIN preguntas pr "
                . "on pa.idProyecto = pr.id "
                . "INNER JOIN usuarios u "
                . "on u.id = pr.idUsuario "
                . "INNER JOIN evaluador m "
                . "on m.idEvaluador = pa.idEvaluador"
                . " where pa.idProyecto = '$idProyecto'";
        $datosMentores = mysql_query($sqlDameMentores);
        if ($datosMentores == false) {
            echo mysql_error();
        }
        ?>


        <div class="col-lg-3 col-sm-6">
            <div class="panel panel-amber">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left"><em class="icon-menu"></em></div>
                        <div class="pull-right"><em class="icon-download"></em></div>
                    </div>
                    <div class="panel-title">
                        <div class="text-center bg-amber pv-lg"><?php echo $rs["nombreProyecto"]; ?><br><small class="text-muted"><?php echo $rs["nombre"]; ?></small></div>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="list-table pv">
                        <li class="wd-xxs"><em class="text-muted fa fa-calendar"></em></li>
                        <li>Start date
                            <div class="text-muted">21 Agosto 2016</div>
                        </li>
                    </ul>
                    <ul class="list-table bb pv">
                        <li>
                            <div class="progress m0 progress-xs">
                                <div style="width:50%" class="progress-bar progress-bar-warning"></div>
                            </div>
                        </li>
                        <li class="wd-xxs text-right">50%</li>
                    </ul>
                    <ul class="list-table pv">
                        <li>
                            <ul class="list-inline">
                                <?php
                                $cont =0;
                                while ($rsM = mysql_fetch_array($datosMentores)) {
                                    $cont++;
                                    ?>
                                <li><a title="<?php echo $rsM["nombre"];?>" href=""><img src="../images/user/<?php echo $rsM["imagen"]; ?>" alt="Follower" class="img-responsive img-circle thumb24"></a></li>
                                <?php } ?>
<!--                                <li><a href=""><img src="images/user/01.jpg" alt="Follower" class="img-responsive img-circle thumb24"></a></li>
                                <li><a href=""><img src="images/user/03.jpg" alt="Follower" class="img-responsive img-circle thumb24"></a></li>
                                <li><a href=""><img src="images/user/04.jpg" alt="Follower" class="img-responsive img-circle thumb24"></a></li>
                                <li><a href=""><img src="images/user/04.jpg" alt="Follower" class="img-responsive img-circle thumb24"></a></li>-->
                                    <li><a href="" class="text-pink v-middle"><strong>+<?php echo $cont;?></strong></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
    }
}?>