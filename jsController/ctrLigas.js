app.controller('ctrLigas', function ($scope, $http) {
    $scope.ligas = {};
    $scope.guardarLigas = function () {
        $http.post("./controlador/guardarLigas.php", {valor: $scope.ligas}).success(function (respuesta) {
            swal("Exito!", respuesta, "success");
            $scope.ligas = {};
        });
    };


    $scope.dameLigas = function () {
        $http.post("./controlador/dameLigas.php").success(function (respuesta) {
            console.log(respuesta);
            $scope.listaLigas = respuesta;
        });
    };
    $scope.eliminarLiga = function (id) {
        $http.post("./controlador/eliminarLiga.php?id="+id).success(function (respuesta){
           $scope.dameLigas();
            swal("Exito!", respuesta, "success");
        });
    };
    $scope.dameLigas();
});