<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BUMDES - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="images/favicon.ico">

        <link href={{ ("css/bootstrap.min.css") }} rel="stylesheet" type="text/css">
        <link href={{ ("css/icons.css") }} rel="stylesheet" type="text/css">
        <link href={{ ("css/style.css") }} rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-body">
                    <h3 class="text-center m-t-0 m-b-30">
                        <span class=""><img src="assets/images/dark.png" alt="logo" height="32"></span>
                    </h3>
                    <h4 class="text-muted text-center m-t-0"><b>Reset Password</b></h4>

                    <form class="form-horizontal m-t-20" action="index.html">

                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Silahkan Menghubung <b>Pengelola BUMDES</b> and instructions will be sent to you!
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary w-md waves-effect waves-light" onclick="window.location.href='/'">Kembali</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>



        <!-- jQuery  -->
        <script src={{ asset("js/jquery.min.js") }}></script>
        <script src={{ asset("js/bootstrap.min.js") }}></script>
        <script src={{ asset("js/modernizr.min.js") }}></script>
        <script src={{ asset("js/detect.js") }}></script>
        <script src={{ asset("js/fastclick.js") }}></script>
        <script src={{ asset("js/jquery.slimscroll.js") }}></script>
        <script src={{ asset("js/jquery.blockUI.js") }}></script>
        <script src={{ asset("js/waves.js") }}></script>
        <script src={{ asset("js/wow.min.js") }}></script>
        <script src={{ asset("js/jquery.nicescroll.js") }}></script>
        <script src={{ asset("js/jquery.scrollTo.min.js") }}></script>

        <script src={{ asset("js/app.js") }}></script>

    </body>
</html>