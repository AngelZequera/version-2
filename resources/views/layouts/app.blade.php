<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link rel="icon" href="{{asset('images/favicon.ico')}}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/btnDT.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.css') }} "/>

    <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
    <script type="text/javascript">
        loader(true);
    </script>
    <style>
        .a.btn.btn-success {
        color: #fff;
        background-color: #blue;
        border-color: #28a745;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
		@if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='rh' || Auth::user()->role =='cta' || Auth::user()->role =='redes'))
			@if(Auth::check()) 
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Áreas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('areas.create') }}">Captura Área</a></li>
                                <li><a class="dropdown-item" href="{{ route('areas.index') }}">Consulta Áreas</a></li>
                            </ul>
                        </li>
			@endif		    
		@endif
		@if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='auxiliar' || Auth::user()->role =='redes'))

			@if(Auth::check())                        
			<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Mobiliario
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('mobiliarios.create') }}">Captura Mobiliário</a></li>
                                <li><a class="dropdown-item" href="{{ route('mobiliarios.index') }}">Consulta Mobiliários</a></li>
                            </ul>
                        </li>
		  @endif
		 @endif

		@if(Auth::check() && (Auth::user()->role == 'admin' || Auth::user()->role == 'cta' || Auth::user()->role == 'auxiliar' || Auth::user()->role == 'redes'))
			@if(Auth::check())                        
			<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Equipos y Préstamos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('equipos.create') }}">Captura Equipo</a></li>
                                <li><hr class="dropdown-divider"></li>
                                {{--<li><a class="dropdown-item" href="#">Crear Préstamo </a></li>--}}
                                <li><a class="dropdown-item" href="{{ route('prestamos.index') }}">Consultar Préstamos</a></li>
                            </ul>
                        </li>
			@endif
		@endif
               @if(Auth::check() && (Auth::user()->role =='admin'))
 	       		@if(Auth::check())   
			{{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Estadisticas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('estadisticas') }}">Generales</a></li>
                            </ul>
                        </li> --}}
		 	@endif
		 @endif

		@if(Auth::check() && (Auth::user()->role =='admin'|| Auth::user()->role =='cta' || Auth::user()->role =='auxiliar' || Auth::user()->role =='redes'))

 			 @if(Auth::check())  
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Tickets
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('tickets.create') }}">Capturar Tickets</a></li>
                                <li><a class="dropdown-item" href="{{ route('tickets.index') }}">Consultar Tickets Abiertos</a></li>
                                <li><a class="dropdown-item" href="{{ route('revisionTickets') }}">Consultar Tickets Completos</a></li>
                            </ul>

                        </li>
			@endif
		@endif

		 @if(Auth::check() && (Auth::user()->role =='admin'|| Auth::user()->role =='cta' || Auth::user()->role =='auxiliar' || Auth::user()->role =='redes' || Auth::user()->role =='aulas'))

			@if(Auth::check())
 			<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Cursos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('cursos.create') }}" >Capturar</a></li>
				<li><a class="dropdown-item" href="{{ url('cursos/2021B') }}">Todos</a></li>
				<li><a class="dropdown-item" href="{{ route('cursos-laboratorios', '2021B') }}">Laboratorios</a></li>
				<li><a class="dropdown-item" href="{{ route('cursos-presenciales', '2021B') }}">Presenciales</a></li>
                            </ul>

                        </li>
			@endif
		@endif


		 @if(Auth::check() && (Auth::user()->role =='admin'))
			@if(Auth::check())
			{{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Usuarios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">Administrar Usuarios</a></li>
                               
                            </ul>

                        </li> --}}			@endif
		@endif
		@if(Auth::check() && (Auth::user()->role =='admin')) 
			@if(Auth::check())
		
			{{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Logs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('logs.index') }}">Consultar Logs</a></li>
                               
                            </ul>

                        </li> --}}			
			@endif 
		@endif
		 @if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='redes')) 

			@if(Auth::check())
	
			<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Proyectos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('proyectos.create') }}">Capturar Proyecto</a></li>
                                <li><a class="dropdown-item" href="{{ route('proyectos.index') }}">Consultar Proyectos</a></li>
                            </ul>
                        </li>
			@endif 
		@endif

		 @if(Auth::check() && (Auth::user()->role =='admin')) 
			@if(Auth::check())
			<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Licencias
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('licencias.create') }}">Capturar licencia</a></li>
                                <li><a class="dropdown-item" href="{{ route('licencias.index') }}">Consultar licencia</a></li>
                            </ul>
                        </li>  	
			@endif 
            @if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='rh' || Auth::user()->role =='cta')) 

			@if(Auth::check())
	
			<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Servicios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('servicios.create') }}">Capturar servicio</a></li>
                                <li><a class="dropdown-item" href="{{ route('servicios.index') }}">Consultar servicios</a></li>
                            </ul>
                        </li>
			@endif 
		@endif
		@if(Auth::check() && (Auth::user()->role =='admin'))
		@if(Auth::check())
			{{-- ADMIN NAVBAR-MKII --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Administrador
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#"><strong>Users</a>
                              <a class="dropdown-item" href="{{ route('usuarios.index') }}">Administrar Usuarios</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"><strong>Logs</a>
                              <a class="dropdown-item" href="{{ route('logs.index') }}">Consultar Logs</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"><strong>Estadisticas</a>
                              <a class="dropdown-item" href="{{ route('estadisticas') }}">Generales</a>
                            </div>
                          </li>
		@endif
		@endif
		@endif 
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
