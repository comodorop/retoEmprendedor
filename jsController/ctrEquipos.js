app.controller('ctrEquipos', function ($scope, $http) {
    $scope.equipo = {};

    $scope.dameEquipos = function () {
        $http.post("./controlador/dameEquipos.php").success(function (respuesta) {
            $scope.litaEquipos = respuesta;
        });
    };

    $scope.guardarEquipos = function () {
        $http.post("./controlador/guardarEquipo.php", {valor: $scope.equipo}).success(function (respuesta) {
            swal("Exito!", respuesta, "success");
            $scope.dameEquipos();
            $scope.equipo={};
        });
    };

    $scope.eliminarEquipo = function (id) {
        $http.post("./controlador/eliminarEquipo.php?id=" + id).success(function (respuesta) {
            swal("Exito!", respuesta, "success");
            $scope.dameEquipos();
        });
    };

    $scope.dameEquipos();



});