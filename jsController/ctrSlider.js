app.controller('ctrSlider', function ($scope, upload, $http) {




    $http.post("./controlador/dameImagenesSlider.php").success(function (info) {
        $scope.listaSlider = info;
    });
    $scope.agregarImagen = function () {
        var file = $scope.file;
        upload.uploadFile(file, $scope.titulo, $scope.descripcion, $scope.descripcion1, $scope.descripcion2, $scope.descripcion3).then(function (res) {
            swal(res);
            $http.post("./controlador/dameImagenesSlider.php").success(function (info) {
                $scope.listaSlider = info;
            });
        });
    };

    $scope.mostarImagenes = function (imagen) {
//        alert(imagen);
        $scope.img = "../imagenesSlider/" + imagen;
        $("#modalImagenes").modal(true);
    };
    $scope.eliminarImagenes = function (id) {
//        alert(id);
        $http.post("./controlador/eliminarImagenSlider.php?id=" + id).success(function (respuesta) {
//            console.log(respuesta);
            swal("Exito!", respuesta, "success");
            $http.post("./controlador/dameImagenesSlider.php").success(function (info) {
                $scope.listaSlider = info;
            });
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
        this.uploadFile = function (file, titulo, descripcion, descripcion1, descripcion2, descripcion3)
        {
            var deferred = $q.defer();
            var formData = new FormData();
            formData.append("titulo", titulo);
            formData.append("descripcion", descripcion);
            formData.append("descripcion1", descripcion1);
            formData.append("descripcion2", descripcion2);
            formData.append("descripcion3", descripcion3);
            formData.append("file", file);
            return $http.post("./controlador/guardarSlider.php", formData, {
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


