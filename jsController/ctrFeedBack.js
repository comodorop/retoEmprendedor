app.controller('ctrFeedBack', function ($scope, $http) {
    $scope.feed = {};
    $scope.feed.opinion = "";
    $scope.feed.cliente = "";
    $http.post("./controlador/dameFeedBack.php").success(function (respuesta) {
        $scope.listaFeedBack = respuesta;
    });
    $scope.guardarFeedBack = function () {
        $scope.okFeedBack = $scope.validarFeedBack();
        if ($scope.okFeedBack == true) {
            $http.post("./controlador/guardarFeed.php", {valor: $scope.feed}).success(function (respuesta) {
                swal("Exito!", respuesta, "success");
                $scope.feed = {};
                $http.post("./controlador/dameFeedBack.php").success(function (respuesta) {
                    $scope.listaFeedBack = respuesta;
                });
            });
        }
    };
    $scope.validarFeedBack = function () {
        $scope.ok = false;
        if ($scope.feed.opinion == "") {
            swal("Error!", "Se requiere una opinion", "error");
        } else if ($scope.feed.cliente == "") {
            swal("Error!", "Se requiere un nombre de cliente", "error");
        } else {
            $scope.ok = true;
        }
        return $scope.ok;
    };
    $scope.eliminarFeedBack = function (id) {
        $http.post("./controlador/eliminarFeedBack.php?id=" + id).success(function (respuesta) {
            swal("Exito!", respuesta, "success");
            $http.post("./controlador/dameFeedBack.php").success(function (respuesta) {
                $scope.listaFeedBack = respuesta;
            });
        });
    };



});