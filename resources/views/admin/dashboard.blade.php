<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mi Mejor Patita</title>
    <link rel="icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    @yield('styles')
</head>
<style>
    body{
      font-family: "Varela Round", sans-serif !important;
    }
    .icon-admin{
        font-weight: bold;
        font-size: 1.2rem;
    }
</style>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="main">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user"></i>&nbsp;&nbsp;{{ Auth::user()->name }}
            {{-- <i class="fa fa-user"></i>&nbsp;&nbsp;Usuario --}}
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">{{ Auth::user()->name }}</span>
            {{-- <span class="dropdown-item dropdown-header">Usuario</span> --}}
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="dropdown-item text-center">
              <i class="fa fa-power-off"></i> &nbsp;&nbsp;{{ __('Cerrar sesión') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      <span class="brand-text font-weight-light">Intranet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          {{-- <a href="#" class="d-block">Usuario</a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{route('products.index')}}" class="nav-link">
                    <i class="nav-icon fa fa-cart-plus"></i>
                    <p>
                        Productos
                        <i class="right fa fa-angle-left icon-admin"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('products.create')}}" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>Crear nuevo producto</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('products.index')}}" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>Lista de productos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-calendar"></i>
                    <p>
                        Citas
                        <i class="right fa fa-angle-left icon-admin"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('dates.index')}}" class="nav-link">
                            <i class="fa fa-circle nav-icon"></i>
                            <p>Lista de citas</p>
                        </a>
                    </li>
                </ul>
            </li>
          <li class="nav-header text-uppercase">Documentos</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>Guía</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  
  <div class="content-wrapper">

    {{-- START: Mostramos los errores a la hora de ingresar los datos en el formulario --}}
    @if (session('info'))
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
            </div>
        </div>
    </div>
      
    @endif
    @if (count($errors))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
    {{-- END --}}
    {{-- Contenido dinámico --}}
    <section class="content">
        @yield('content')
    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2019-{{date('Y')}} Todos los derechos reservados
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="{{asset('js/app.js') }}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
@yield('scripts')
</body>
</html>
