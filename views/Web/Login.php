<div class="animated fadeOutZoom">
    <div class="container container-sm animated fadeInDown">
        <div class="center-block mt-xl">
            <!-- START panel-->
            <!--<img src="images/logo-gray.png" alt="Image" class="center-block img-rounded">-->
            <div class="panel">
                <div class="panel-body">
                    <p style="margin-left: 50px" class="pv text-bold">ACCESO AL SISTEMA</p>
                    <form role="form" class="mb-lg">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-md-10">
                                <div class="form-group has-feedback mb">
                                    <input id="exampleInputEmail1" 
                                           ng-model="usuario"
                                           type="text" 
                                           placeholder="Usuario" 
                                           autocomplete="off" 
                                           class="form-control"/>
                                    <span class="fa fa-user form-control-feedback text-muted">
                                    </span>
                                </div><br>
                                <div class="form-group has-feedback">
                                    <input id="exampleInputPassword1" 
                                           ng-model="pass"
                                           type="password" placeholder="Your password" 
                                           class="form-control"/>
                                    <span class="fa fa-lock form-control-feedback text-muted">

                                    </span>
                                </div>
                                <button ng-click="acceder()" class="btn btn-primary">Acceder</button>
                            </div>
                            <div class="col-lg-1"></div>
                            <!--<div class="col-lg-offset-3"></div>-->
                        </div>
                    </form>
                </div>
            </div>
            <!--<div class="text-center mt"><a href="page.recover.html" class="text-muted">Forgot your password?</a></div>-->
            <!-- END panel-->
            <!--            <div class="p-lg text-center">
                            <hr><span class="mr-sm">&copy; </span><span class="mr-sm">2015</span><span>Naut</span><br>Bootstrap + AngularJS
                        </div>-->
        </div>
    </div>
</div>
