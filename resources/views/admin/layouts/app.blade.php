<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CIJ Tulancingo</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Sistema para el Control de Coberturas">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/images/logo/CIJTulancingo.png")}}">

    <!-- CSS
    ============================================ -->
    @include('admin.layouts.css')

</head>

<body class="side-header-light header-top-dark">

<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('admin.layouts.header')
    <!-- Header Section End -->

    <!-- Side Header Start -->
    @include('admin.layouts.sidenav')
    <!-- Side Header End -->

    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3 class="title">@yield('title') <span>/ @yield('subtitle')</span></h3>
                </div>
            </div><!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-auto mb-20">
                <div class="buttons-group">
                    @yield('buttons-heading')
                </div>
            </div><!-- Page Button Group End -->

        </div><!-- Page Headings End -->

        <!-- Page Content Start -->
        <div class="row mbn-30">
            @yield('content')
        </div>
        <!-- Page Content End-->

    </div><!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('admin.layouts.footer')
    <!-- Footer Section End -->

</div>

<!-- JS
============================================ -->
@include('admin.layouts.js')

@if(session('success'))
<script>
    (function ($) {
        toastr.success('{{session('success')}}');
    })(jQuery);
</script>
@endif
</body>

</html>