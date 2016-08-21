app.controller('ctrUltimosTrabajos', function ($scope, upload, $http) {

//    $scope.dameUltimosTrabajos = function () {
//       
//    };
    $http.post("./controlador/dameUltimosTrabajos.php").success(function (respuesta) {
//        alert(respuesta);
        $scope.listaUltimosTrabajos = respuesta;
    });
//    $scope.dameUltimosTrabajos();

    $scope.agregarImagenUltimosTrabajos = function () {
        var file = $scope.file;
        upload.uploadFileUltimosTrabajos(file).then(function (res) {
            swal("Exito", res, "success");
        });
    };


}).directive('uploaderModel', ["$parse", function ($parse) {
        return {
            restrict: 'A',
            link: function (scope, iElement, iAttrs)
            {
                iElement.on("change", function (e)
                {
                    $parse(iAttrs.uploaderModel).assign(scope, iElement[0].files[0]);
                });
            }
        };
    }]).service('upload', ["$http", "$q", function ($http, $q)
    {
        this.uploadFileUltimosTrabajos = function (file)
        {
            var deferred = $q.defer();
            var formData = new FormData();
            formData.append("file", file);
            return $http.post("./controlador/guardarUltimosTrabajos.php", formData, {
                headers: {
                    "Content-type": undefined
                },
                transformRequest: angular.identity
            })
                    .success(function (res)
                    {
                        deferred.resolve(res);
                    })
                    .error(function (msg, code)
                    {
                        deferred.reject(msg);
                    });
            return deferred.promise;
        };





    }]);
;