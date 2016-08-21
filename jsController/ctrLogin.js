app.controller('ctrLogin', function ($scope, $http, $cookies, auth) {

    $scope.acceder = function () {
        $http.post("./controlador/validarLogin.php?usuario=" + $scope.usuario + "&pass=" + $scope.pass)
                .success(function (respuesta) {
                    console.log(respuesta);
                    if (respuesta == 1) {
                        auth.login($scope.usuario, $scope.pass);
                    } else {
                        swal("Acceso denegado", "Credenciales no validas", "error");
                    }
                });
    };

    $scope.logout = function ()
    {
        auth.logout();
    };
});