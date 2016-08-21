<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div class="panel-title"> 
                    Clientes
                    <a title="Atras" href="#clientes" class="btn btn-warning pull-right"><i class="fa fa-mail-reply"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nombre del tutor:</label>
                        <input ng-model="cliente.nombre" type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input ng-model="cliente.telefono" type="number" class="form-control"/> 
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input ng-model="cliente.correo" type="email" class="form-control"/>
                    </div>
                    <hr>
                    <div class="form-group"
                         > 
                        <label>Agregar Tutor</label>
                        <input ng-model="otroTutorD" type="text" class="form-control"/>
                    </div>
                    <button ng-click="agregarTutor()" class="btn btn-primary">Agregar Tutor</button>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th>Tutor</th>
                            <th>Eliminar</th>
                            </thead>
                            <tr ng-repeat="tutor in otroTutor">
                                <td>
                                    {{tutor.nombre}}
                                </td>
                                <td>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="form-group">
                            <label>Liga</label>
                            <select class="form-control"
                                    ng-model="idLiga"
                                    ng-options="liga.idLiga as liga.liga for liga in listaLigas track by liga.idLiga"
                                    >
                                <option value="">Seleccione una liga</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Equipo</label>
                            <select class="form-control"
                                    ng-model="idEquipo"
                                    ng-options="equipo.id as equipo.equipo for equipo in litaEquipos track by equipo.id"
                                    >
                                <option value="">Seleccione una Equipo</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Nombre del niño:</label>
                            <input ng-model="hijo.nombre" type="text" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input datetime="dd/MM/yyyy"  
                                   ng-model="hijo.fechaNacimiento" 
                                   type="date" class="form-control"/>
                        </div>
                        <button ng-click="agregarHijos();" class="btn btn-primary">Agregar</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th>Niño</th>
                            <th>Fecha de nacimiento</th>
                            <th>Opciones</th>
                            </thead>
                            <tr ng-repeat="hijo in hijos">
                                <td>
                                    {{hijo.nombre}}
                                </td>
                                <td>{{hijo.fechaNacimiento| date:"dd/MM/yyyy"}}</td>
                                <td>

                                </td>
                            </tr>
                        </table>  
                    </div>
                </div>
                <div class="col-lg-12">
                    <button ng-click="guardarClientes()" class="btn btn-success pull-right" >Guardar</button>
                </div>
            </div>
        </div>


    </div>
</div>