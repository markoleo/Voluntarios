<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CIJ Tulancingo</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Sistema para Control de Coberturas de los Voluntarios">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/images/logo/CIJTulancingo.png")}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("assets/core/bootstrap/css/bootstrap.min.css")}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset("assets/core/material-design-iconic-font/css/material-design-iconic-font.min.css")}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/plugins.min.css")}}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/helper.min.css")}}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{asset("assets/css/style-orange.css")}}">

</head>

<body>

<div class="main-wrapper">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap">
            <div class="row">

                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    <div class="login-register-form-wrap">

                        <div class="content">
                            <div align="center">
                            <img  src="{{asset("assets/images/logo/CIJTulancingo2.png" )}}" alt="">
                            </div>
                            <div align="center">
                            <h1>CIJ Tulancingo </h1>
                            <p>Sistema para Control de Coberturas de los Voluntarios.</p>
                            </div>
                        </div>

                        <div class="login-register-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 mb-20"><input class="form-control" type="email" placeholder="Correo electrónico"></div>
                                    <div class="col-12 mb-20"><input class="form-control" type="password" placeholder="Contraseña"></div>
                                    <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox"><input id="remember" type="checkbox"><i class="icon"></i>Recuérdame.</label></div>
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <div class="col-auto mb-15"></div>
                                            <div class="col-auto mb-15"><a href="#">¿Olvidaste la contraseña?</a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-10"><a href="{{route('admin.index')}}" class="button button-primary button-outline float-right">Acceder</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">

                </div>

            </div>
        </div>

    </div><!-- Content Body End -->

</div>

<!-- JS
============================================ -->

<!-- Global -->
<script src="{{asset("assets/core/jquery/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("assets/core/bootstrap/js/bootstrap.min.js")}}"></script>

<!--Plugins JS-->
<script src="{{asset("assets/core/perfect-scrollbar/js/perfect-scrollbar.min.js")}}"></script>

<!--Main JS-->
<script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>