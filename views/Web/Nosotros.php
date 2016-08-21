<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"> 
                    Nosotros
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>
                        Comentario :
                    </label>
                    <textarea
                        rows="10"
                        ng-model="nosotros.nosotros"

                        class="form-control" type="text" placeholder="Cometarios acerca de mis servicios..."></textarea>
                </div>
                <button ng-click="actualizarNosotros();" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <br>
            </div>
        </div>


    </div>
</div>