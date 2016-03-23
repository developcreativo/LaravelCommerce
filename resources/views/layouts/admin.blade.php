<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administración</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
      <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    {!! Html::style('admin/bootstrap-table/bootstrap-table.css') !!}
    {!! Html::script('admin/bootstrap-table/bootstrap-table.js') !!}
    {!! Html::script('admin/bootstrap-table/locale/bootstrap-table-es-SP.js') !!}
    {!! Html::script('admin/bootstrap-table/extensions/filter-control/bootstrap-table-filter-control.js') !!}
    {!! Html::style('admin/admin-style.css') !!}
    {!! Html::script('ckeditor/ckeditor.js') !!}
    {!! Html::script('js/funciones.js') !!}
    {!! HTML::style('admin/css/dropzone.min.css') !!}
    {!! HTML::style('admin/css/sweetalert.css') !!}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Mi página
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/productos') }}"><span class="glyphicon glyphicon-th-list"></span> Lista</a></li>
                            <li><a href="{{ url('/productos/create') }}"><span class="glyphicon glyphicon-plus"></span> Nuevo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;a<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/categorias') }}"><span class="glyphicon glyphicon-th-list"></span> Lista</a></li>
                            <li><a href="{{ url('/categorias/create') }}"><span class="glyphicon glyphicon-plus"></span> Nuevo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tipos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/tipo') }}"><span class="glyphicon glyphicon-th-list"></span> Lista</a></li>
                            <li><a href="{{ url('/tipo/create') }}"><span class="glyphicon glyphicon-plus"></span> Nuevo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Marcas<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/marca') }}"><span class="glyphicon glyphicon-th-list"></span> Lista</a></li>
                            <li><a href="{{ url('/marca/create') }}"><span class="glyphicon glyphicon-plus"></span> Nuevo</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Entrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->nombre }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    
    <!--Dropzone -->
    
    {!! HTML::script('admin/js/dropzone.min.js') !!}
    {!! HTML::script('admin/js/sweetalert.min.js') !!}
    @yield('scripts')
</body>
</html>
