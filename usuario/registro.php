<!DOCTYPE html><!--[if IE 9 ]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Naut - Bootstrap Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/vendor.css">
        <script src="../scripts/vendor/modernizr.js"></script>
        <!-- GMaps api-->
        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
    </head>
    <body>
        <div >
            <section>
                <div class="app">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form id="example-form" action="#" class="hidden form-wizard">
                                <div>
                                    <h3>Account</h3>
                                    <section>
                                        <label for="userName">User name *</label>
                                        <input id="userName" name="userName" type="text" class="form-control required">
                                        <label for="password">Password *</label>
                                        <input id="password" name="password" type="text" class="form-control required">
                                        <label for="confirm">Confirm Password *</label>
                                        <input id="confirm" name="confirm" type="text" class="form-control required">
                                        <p>(*) Mandatory</p>
                                    </section>
                                    <h3>Profile</h3>
                                    <section>
                                        <label for="name">First name *</label>
                                        <input id="name" name="name" type="text" class="form-control required">
                                        <label for="surname">Last name *</label>
                                        <input id="surname" name="surname" type="text" class="form-control required">
                                        <label for="email">Email *</label>
                                        <input id="email" name="email" type="text" class="form-control required email">
                                        <label for="address">Address</label>
                                        <input id="address" name="address" type="text" class="form-control">
                                        <p>(*) Mandatory</p>
                                    </section>
                                    <h3>Hints</h3>
                                    <section>
                                        <p class="lead">You're almost done!</p>
                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                        <div class="checkbox c-checkbox">
                                            <label>
                                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"><span class="fa fa-check"></span>I agree with the Terms and Conditions.
                                            </label>
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="../scripts/vendor.js"></script>
        <script src="../scripts/plugins.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>