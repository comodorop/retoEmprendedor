<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"> 
                    Preguntas frecuentes (FAQS)
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>
                        Pregunta :
                    </label>
                    <input ng-model="preguntas.pregunta" class="form-control" type="text" placeholder="Pregunta..."/>
                </div>
                <div class="form-group">
                    <label>
                        Respuesta :
                    </label>
                    <textarea ng-model="preguntas.respuesta" class="form-control" type="text" placeholder="Respuesta..."></textarea>
                </div>
                <button ng-click="guardarFaqs();" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                        <th>Pregunta</th>
                        <th>Respuesta</th>
                        <th>Opciones</th>
                        </thead>
                        <tr ng-repeat="faqs in listaPreguntas">
                            <td>{{faqs.pregunta}}</td>
                            <td>{{faqs.respuesta}}</td>
                            <td><button ng-click="eliminarFaqs(faqs.id)" class="btn btn-danger">
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