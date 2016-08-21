<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"> 
            <!--<em class="icon-signal fa-lg text-muted pull-right"></em>-->
            Ultimos Trabajos
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-lg-5">
                <div class="form-group">
                    <label>Imagen Ultimos trabajos</label>
                    <input class="form-control" type="file" name="file" uploader-model="file" /> 
                </div>
                <button ng-click="agregarImagenUltimosTrabajos()"
                        class="btn btn-primary">Subir Imagen</button>
            </div>


            <div class="col-lg-7">
                <div ng-repeat="lista in listaUltimosTrabajos" class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img  ng-src="../imagenesUltimosTrabajos/{{lista.imagen}}" 
                              alt="...">
<!--                        <div class="caption">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<img src="../imagenesSlider/DreamCards.png"/>-->
<div class="modal fade" id="modalImagenes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Imagen Slider</h4>
            </div>
            <div class="modal-body">
                <!--<img src="../../../imagenesSlider/DreamCards.png"/>-->
                <img class="img img-responsive" src="{{img}}"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>