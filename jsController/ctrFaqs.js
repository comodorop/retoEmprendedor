app.controller('ctrFaqs', function ($scope, $http) {
    $scope.preguntas = {};
    $scope.preguntas.pregunta = "";
    $scope.preguntas.respuesta = "";
    $http.post("./controlador/dameFaqs.php").success(function (respuesta) {
        $scope.listaPreguntas = respuesta;
    });
    $scope.guardarFaqs = function () {
        $scope.validar = $scope.validarFaqs();
        if ($scope.validar == true) {
            $http.post("./controlador/guardarFaqs.php",
                    {valor: $scope.preguntas}).success(function (respuesta) {
                swal("Exito!", respuesta, "success");
                $scope.preguntas = {};
                $http.post("./controlador/dameFaqs.php").success(function (respuesta) {
                    $scope.listaPreguntas = respuesta;
                });
            });
        }
    };

    $scope.validarFaqs = function () {
        $scope.ok = false;
        if ($scope.preguntas.pregunta == "") {
            swal("Error!", "Se requiere una pregunta", "error");
        } else if ($scope.preguntas.respuesta == "") {
            swal("Error!", "Se requiere una respuesta", "error");
        } else {
            $scope.ok = true;
        }
        return $scope.ok;
    };

    $scope.eliminarFaqs = function (id) {
        $http.post("./controlador/eliminarFaqs.php?id=" + id).success(function (respuesta) {
            swal("Exito!", respuesta, "success");
            $http.post("./controlador/dameFaqs.php").success(function (respuesta) {
                $scope.listaPreguntas = respuesta;
            });
        });
    };

});

