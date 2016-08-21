app.controller('ctrNosotros', function ($scope, $http) {
    $scope.nosotros = {};
    $http.post("./controlador/dameInformacionNosotros.php").success(function (respuesta) {
//        alert(respuesta);
//        console.log(respuesta);
        $scope.nosotros = respuesta;
    });

    $scope.actualizarNosotros = function () {
        $http.post("./controlador/actualizarInformacionNosotros.php", {valor: $scope.nosotros}).success(function (respuesta) {
            swal("Exito!", respuesta, "success");
        });
    };

});