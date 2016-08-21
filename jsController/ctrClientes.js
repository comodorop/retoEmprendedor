app.controller('ctrClientes', function ($scope, $http) {
    $scope.tutor = {};
    $scope.hijos = new Array();
    $scope.hijo = {};
    $scope.cliente = {};
    $scope.otroTutor = new Array();
    $scope.otroTutorD = "";



    $scope.agregarTutor = function () {
        if ($scope.otroTutorD == "") {
            swal("Error", "Se requiere un nombre del tutor", "error");
        } else {
            $scope.tutor = {};
            $scope.tutor.nombre = $scope.otroTutorD;
            $scope.otroTutor.push($scope.tutor);
            $scope.otroTutorD = "";
        }
    };
    $scope.dameLigasClientes = function () {
        $http.post("./controlador/dameLigas.php").success(function (respuesta) {
            console.log(respuesta);
            $scope.listaLigas = respuesta;
        });
    };

    $scope.agregarHijos = function () {
        $scope.hijo.idLiga = $scope.idLiga;
        $scope.hijo.idEquipo = $scope.idEquipo;
        $scope.hijos.push($scope.hijo);
        $scope.hijo = {};
    };

    $scope.guardarClientes = function () {
        if ($scope.hijos.length == 0) {
            swal("Ups", "Se requiere por lo menos un hijo", "warning");
        } else {
            $scope.datos = new Array();
            $scope.datos.push($scope.cliente);
            $scope.datos.push($scope.hijos);
            $scope.datos.push($scope.tutor);
            $http.post("./controlador/guardarClientes.php", {valor: $scope.datos}).success(function (respuesta) {
                swal("Exito", respuesta, "success");
            });
        }
    };
    $scope.dameEquipos = function () {
        $http.post("./controlador/dameEquipos.php").success(function (respuesta) {
            $scope.litaEquipos = respuesta;
        });
    };

    $scope.dameClientes = function () {
        $http.post("./controlador/dameClientes.php").success(function (respuesta) {
            $scope.listaClientes = respuesta;
        });
    };

    $scope.dameLigasClientes();
    $scope.dameEquipos();
    $scope.dameClientes();
});