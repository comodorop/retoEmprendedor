<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"> 
                    Equipos
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>
                        Nombre del equipo :
                    </label>
                    <input ng-model="equipo.equipo" class="form-control" type="text" placeholder="Nombre del equipo"/>
                </div>
                <button ng-click="guardarEquipos()" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                        <th>Liga</th>
                        </thead>
                        <tr ng-repeat="equipo in litaEquipos">
                            <td>{{equipo.equipo}}</td>
                            <td><button ng-click="eliminarEquipo(equipo.id)" class="btn btn-danger">
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