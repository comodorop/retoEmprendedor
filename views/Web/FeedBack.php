<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"> 
                    <!--<em class="icon-signal fa-lg text-muted pull-right"></em>-->
                    FeedBack (Comentarios de los usuarios)
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>
                        Comentario :
                    </label>
                    <textarea
                        ng-model="feed.opinion"
                        class="form-control" type="text" placeholder="Cometarios acerca de mis servicios..."></textarea>
                </div>
                <div class="form-group">
                    <label>
                        Persona :
                    </label>
                    <input ng-model="feed.cliente" placeholder="Cliente" type="text" class="form-control"/>
                </div>

                <button ng-click="guardarFeedBack();" class="btn btn-primary"><i class="fa fa-save"></i></button>


                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                        <th>Pregunta</th>
                        <th>Respuesta</th>
                        <th>Opciones</th>
                        </thead>
                        <tr ng-repeat="feed in listaFeedBack">
                            <td>{{feed.comentario}}</td>
                            <td>{{feed.usuario}}</td>
                            <td><button class="btn btn-danger" ng-click="eliminarFeedBack(feed.id)"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>


    </div>
</div>