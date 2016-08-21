<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div class="panel-title"> 
                    Lista de papás
                    <a href="#nuevoCliente" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>
                    <!--<button class="btn btn-primary pull-right"></button>-->
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>HIjos</th>
                    <th></th>
                    </thead>
                    <tr ng-repeat="clientes in listaClientes">
                        <td>{{clientes.id}}</td>
                        <td>{{clientes.nombre}}</td>
                        <td>{{clientes.telefono}}</td>
                        <td>{{clientes.correo}}</td>
                          <td>{{clientes.hijos}}</td>

                    </tr>
                </table>
            </div>
        </div>


    </div>
</div>