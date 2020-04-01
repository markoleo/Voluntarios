@extends('layouts.app')

@section('content')
        <!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>Fullscreen Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="assets12/css/reset.css">
    <link rel="stylesheet" href="assets12/css/supersized.css">
    <link rel="stylesheet" href="assets12/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>Iniciar sesión</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
        <input id="email" type="email" name="email" class=" @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div>
            <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Contraseña">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-outline-warning">
            {{ __('Ingresar') }}
        </button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <p>CIJTulancingo 2020 v1.0</p>
    </div>
</div>

<!-- Javascript -->
<script src="assets12/js/jquery-1.8.2.min.js"></script>
<script src="assets12/js/supersized.3.2.7.min.js"></script>
<script src="assets12/js/supersized-init.js"></script>
<script src="assets12/js/scripts.js"></script>

</body>

</html>
@endsection


