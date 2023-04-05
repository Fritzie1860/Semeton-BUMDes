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

    <link href={{ 'css/bootstrap.min.css' }} rel="stylesheet" type="text/css">
    <link href={{ 'css/icons.css' }} rel="stylesheet" type="text/css">
    <link href={{ 'css/style.css' }} rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">

            <div class="panel-body">
                <h3 class="text-center m-t-0 m-b-30">
                    <span class=""><img src={{ asset('images/dark.png') }} alt="logo" height="125"></span>
                </h3>


                @if (session()->has('LoginFailed'))
                    <p style="color:red; font-size:12pt">{{ session('LoginFailed') }}</p>
                @endif
                <!--  -->
                <form class="form-horizontal m-t-20" action="{{ route('authenticate') }}" method="Post">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="username" type="text" placeholder="Username" autoFocus
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password" placeholder="Kata Sandi"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div>
                                <!-- {{-- <input id="checkbox-signup" type="checkbox"> --}} -->
                                <button class="btn-link" onclick="">Lupa Kata Sandi</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit"
                                onclick="">Masuk</button>
                        </div>
                    </div>

                    <!-- {{-- <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-7">
                                <a href="" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="" class="text-muted">Create an account</a>
                            </div>
                        </div> --}} -->
                </form>
                <!--  -->
            </div>

        </div>
    </div>



    <!-- jQuery  -->
    <script src={{ asset('js/jquery.min.js') }}></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/modernizr.min.js') }}></script>
    <script src={{ asset('js/detect.js') }}></script>
    <script src={{ asset('js/fastclick.js') }}></script>
    <script src={{ asset('js/jquery.slimscroll.js') }}></script>
    <script src={{ asset('js/jquery.blockUI.js') }}></script>
    <script src={{ asset('js/waves.js') }}></script>
    <script src={{ asset('js/wow.min.js') }}></script>
    <script src={{ asset('js/jquery.nicescroll.js') }}></script>
    <script src={{ asset('js/jquery.scrollTo.min.js') }}></script>

    <script src={{ asset('js/app.js') }}></script>

</body>

</html>
