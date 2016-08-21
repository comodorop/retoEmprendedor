app.controller('ctrCerrarSesion', function ($scope, $http, $cookies, auth) {
    $scope.logout = function ()
    {
        auth.logout();
    };
    $scope.logout();
});