<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"> 
                    Ligas
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>
                        Nombre de la liga :
                    </label>
                    <input ng-model="ligas.nombre" class="form-control" type="text" placeholder="Pregunta..."/>
                </div>
                <button ng-click="guardarLigas()" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                        <th>Liga</th>
                        </thead>
                        <tr ng-repeat="liga in listaLigas">
                            <td>{{liga.liga}}</td>
                            <td><button ng-click="eliminarLiga(liga.idLiga)" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>