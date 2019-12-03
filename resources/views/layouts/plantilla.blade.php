<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mi Mejor Patita</title>
    <link rel="icon" href="{{asset('img/favicon.ico')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/social/style.css')}}">
    @yield('styles')
</head>

<body>
    <!--::header part start::-->
    <!-- Start Top Header Bar -->
    @include('pages.partials.header')
    
    {{-- Incluimos el contenido  --}}
    @yield('content')

    <!-- footer part start-->
    @include('pages.partials.footer')
    <!-- footer part end-->

    <script src="{{asset('js/app.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- counterup js -->
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>

    @yield('scripts')
</body>

</html>