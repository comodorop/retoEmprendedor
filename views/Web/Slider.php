<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title"> 
            <!--<em class="icon-signal fa-lg text-muted pull-right"></em>-->
            Módulo del slider
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-lg-5">
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text"
                           ng-model="titulo"
                           class="form-control" placeholder="Titulo"/>
                </div>

                <div class="form-group">
                    <label>Descripcion 1</label>
                    <input ng-model="descripcion1" placeholder="Descripcion 1" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Descripcion 2</label>
                    <input ng-model="descripcion2" placeholder="Descripcion 1" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Descripcion 3</label>
                    <input ng-model="descripcion3" placeholder="Descripcion 1" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea ng-model="descripcion" class="form-control" placeholder="Pequeña descripcion"></textarea>
                </div>
                <div class="form-group">
                    <label>Imagen Slider</label>
                    <input class="form-control" type="file" name="file" uploader-model="file" /> 
                </div>
                <button ng-click="agregarImagen()"
                        class="btn btn-primary">Subir Imagen</button>
            </div>


            <div class="col-lg-7">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                        </thead>

                        <tr ng-repeat="slider in listaSlider">
                            <td>
                                {{slider.titulo}}
                            </td>
                            <td>
                                <a ng-click="mostarImagenes(slider.slider)">{{slider.slider}}</a>
                            </td>
                            <td>
                                <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                <button ng-click="eliminarImagenes(slider.idSlider)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>

                        </tr>
                    </table>
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