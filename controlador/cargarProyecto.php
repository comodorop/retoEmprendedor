<?php
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$id = $_GET["idProyecto"];
$sql = "SELECT * FROM preguntas WHERE id = '$id'";
$datos = mysql_query($sql);
if ($datos == false) {
    echo mysql_error();
} else {
    while ($rs = mysql_fetch_array($datos)) {
        ?>
        <div class="col-lg-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </span>

            </div>
            <!--<input type="text" class="form-control" placeholder="Palabras claves separadas con comas"/>-->
        </div>
        <br>
        <br> <br>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Nombre del proyecto:</label>
                <input class="form-control" type="text" disabled value="<?php echo $rs["nombreProyecto"]; ?>"/>
            </div>
            <div class="form-group">
                <label>Descripcion dle proyecto:</label>
                <input class="form-control" type="text" disabled value="<?php echo $rs["descripcionProyecto"]; ?>"/>
            </div>
            <div class="form-group">
                <label>Dinero Requerido</label>
                <input class="form-control" type="text" disabled value="<?php echo $rs["dineroRequrido"]; ?>"/>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Calificacion">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-save"></i></button>
                    </span>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Mision:</label>
                <textarea rows="15" class="form-control">
                    <?php echo $rs["mision"]; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label>Vision</label>
                <textarea rows="15" class="form-control">
                    <?php echo $rs["vision"]; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label>Valores</label>
                <textarea rows="15" class="form-control">
                    <?php echo $rs["valores"]; ?>
                </textarea>
            </div>
        </div>
        <?php
    }
}
?>
