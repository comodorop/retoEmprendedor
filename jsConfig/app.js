"use strict";
var app = angular.module("dreamCards", ['ngRoute', 'ngCookies']);
app.config(function ($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: './views/Web/Login.php',
        controller: 'ctrLogin'
    }).when('/slider', {
        templateUrl: './views/Web/Slider.php',
        controller: 'ctrSlider'
    }).when('/faqs', {
        templateUrl: './views/Web/Faqs.php',
        controller: 'ctrFaqs'
    }).when('/feedBacks', {
        templateUrl: './views/Web/FeedBack.php',
        controller: 'ctrFeedBack'
    }).when('/nosotros', {
        templateUrl: './views/Web/Nosotros.php',
        controller: 'ctrNosotros'
    }).when('/clientes', {
        templateUrl: './views/Web/ListaClientes.php',
        controller: 'ctrClientes'
    }).when('/nuevoCliente', {
        templateUrl: './views/Web/Clientes.php',
        controller: 'ctrClientes'
    }).when('/home', {
        templateUrl: './views/dreamCards.php'
    }).when('/trabajos', {
        templateUrl: './views/Web/UltimosTrabajos.php',
        controller: 'ctrUltimosTrabajos'
    }).when('/ligas', {
        templateUrl: './views/Web/Ligas.php',
        controller: 'ctrLigas'
    }).when('/login', {
        templateUrl: './views/Web/Login.php',
        controller: 'ctrLogin'
    }).when('/cerrarSesion', {
        templateUrl: './views/Web/Login.php',
        controller: 'ctrCerrarSesion'
    }).when('/equipos', {
        templateUrl: './views/Web/Equipos.php',
        controller: 'ctrEquipos'
    });
});

app.factory("auth", function ($cookies, $cookieStore, $location)
{
    return{
        login: function (username, password)
        {
            $cookies.username = username;
            $cookies.password = password;
            $cookies.putObject("usuario", username);
            $cookies.putObject("pass", password);
            $location.path("/home");
        },
        logout: function ()
        {
            $cookies.remove("usuario");
            $cookies.remove("pass");
            $location.path("/login");
        },
        checkStatus: function ()
        {
            var rutasPrivadas = ["/slider", "/faqs", "/feedBacks", "/nosotros", "/clientes", "/home", "/trabajos", "/ligas", "/equipos"];
            if (this.in_array($location.path(), rutasPrivadas) && typeof ($cookies.getObject("usuario")) == "undefined")
            {
//                alert("no le valio madres");
                $location.path("/login");
            }
            if (this.in_array("/login", rutasPrivadas) && typeof ($cookies.getObject("usuario")) != "undefined")
            {
                $location.path("/home");
                alert("le valio madres");
            }
        },
        in_array: function (needle, haystack)
        {
            var key = '';
            for (key in haystack)
            {
                if (haystack[key] == needle)
                {
                    return true;
                }
            }
            return false;
        }
    };
});
app.run(function ($rootScope, auth)
{
    $rootScope.$on('$routeChangeStart', function ()
    {
        auth.checkStatus();
    });
});

