<link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<script src="{{ asset('js/sb-admin-2.js') }}"></script>
<script src="{{ asset('js/Chart.js') }}"></script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="{{url('/')}}">SIGE CTA CUCSH</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">SIGE CTA CUCSH</span>
                <i class='bx bx-x'></i>
            </div>
            <ul class="links">
                @can('AULAS_AREAS#ver')
                <li>
                    <a href="#">Áreas</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="{{ route('areas.create') }}">Captura Área</a></li>
                        <li><a href="{{ route('areas.index') }}">Consulta Áreas</a></li>
                        <li><a href="{{ route('historial-areas') }}">Estadísticas</a></li>
                    </ul>
                </li>
                @endcan

                @can('MOBILIARIO#ver')
                <li>
                    <a href="#">Mobiliario</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        @can('MOBILIARIO#crear')
                        <li><a href="{{ route('mobiliarios.create') }}">Captura Mobiliario</a></li>
                        @endcan
                        <li><a href="{{ route('mobiliarios.index') }}">Consulta Mobiliarios</a></li>
                    </ul>
                </li>
                @endcan

                @can('EQUIPOS#ver')
                <li>
                    <a href="#">Equipos y Préstamos</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="{{ route('equipos.create') }}">Captura Equipo</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a href="{{ route('nuevo-prestamo') }}">Crear Préstamo</a></li>
                        <li><a href="{{ route('prestamos.index') }}">Consultar Préstamos</a></li>
                        <li><a href="{{ route('prestamos-all') }}">Historial Préstamos</a></li>
                    </ul>
                </li>
                @endcan

                @can('ESTADISTICAS#ver')
                {{--
          <li>
            <a href="#">Estadisticas</a>
          <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="{{ route('estadisticas') }}">Generales</a></li>
            </ul>
            </li>
            --}}
            @endcan

            @can('TICKETS#ver')
            <li>
                <a href="#">Tickets</a>
                <i class='bx bxs-chevron-down tickets-arrow arrow '></i>
                    <ul class="tickets-sub-menu sub-menu">
                    <li><a href="{{ route('tickets.create') }}">Captura Tickets</a></li>
                    <li><a href="{{ route('tickets.index') }}">Consultar Tickets Abiertos</a></li>
                    <li><a href="{{ route('revisionTickets') }}">Consultar Tickets Completos</a></li>
                    <li><a href="{{ route('historial-tickets') }}">Estadísticas</a></li>
                </ul>
            </li>
            @endcan

            @can('CURSOS#ver')
            <li>
                <a href="#">Cursos</a>
                <i class='bx bxs-chevron-down cur-arrow arrow  '></i>
                <ul class="cur-sub-menu sub-menu">
                    @can('CURSOS#crear')
                    <li><a href="{{ route('cursos.create') }}">Capturar</a></li>
                    @endcan
                    <li><a href="{{ url('cursos/2022A') }}">Todos</a></li>
                    <li><a href="{{ route('cursos-laboratorios', '2022A') }}">Laboratorios</a></li>
                    <li><a href="{{ route('cursos-presenciales', '2022A') }}">Presenciales</a></li>
                </ul>
            </li>
            @endcan

            @can('USUARIOS#ver')
            <li>
                <a href="#">Usuarios</a>
                <i class='bx bxs-chevron-down user-arrow arrow  '></i>
                <ul class="user-sub-menu sub-menu">
                    <li><a href="{{ route('usuarios.index') }}">Administrar Usuarios</a></li>
                    <li><a href="{{ route('usuarios.index') }}">Roles y Permisos</a></li>
                </ul>
            </li>
            @endcan

            @can('LOGS#crear')
            {{--
          <li>
            <a href="#">Logs</a>
          <i class='bx bxs-chevron-down logs-arrow arrow  '></i>
            <ul class="logs-sub-menu sub-menu">
                <li><a href="{{ route('logs.index') }}">Consultar Logs</a></li>
            </ul>
            </li>
            --}}
            @endcan

            @can('PROYECTOS#ver')
            <li>
                <a href="#">Proyectos</a>
                <i class='bx bxs-chevron-down proj-arrow arrow  '></i>
                <ul class="proj-sub-menu sub-menu">
                    <li><a href="{{ route('proyectos.create') }}">Capturar Proyecto</a></li>
                    <li><a href="{{ route('proyectos.index') }}">Consultar Proyectos</a></li>
                </ul>
            </li>
            @endcan

            @can('SERVICIOS#ver')
            <li>
                <a href="#">Servicios</a>
                <i class='bx bxs-chevron-down serv-arrow arrow  '></i>
                <ul class="serv-sub-menu sub-menu">
                    <li><a href="{{ route('servicios.create') }}">Capturar servicio</a></li>
                    <li><a href="{{ route('servicios.index') }}">Consultar servicios</a></li>
                </ul>
            </li>
            @endcan



        <li>
            @guest
            @if (Route::currentRouteName() == 'register')
            <li><a href="href={{ route('login') }}">{{ __('Acceder') }}</a></li>
            @endif

            @if (Route::currentRouteName() == 'login')
            <li><a href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
            @endif
            @endguest

            @auth
            <li>
                <a href="#">{{ Auth::user()->name }}</a>
                <i class='bx bxs-chevron-down usuario-arrow arrow  '></i>
                <ul class="usuario-sub-menu sub-menu">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Salir') }}</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        {{-- <li style="
            position: fixed;
            right: 70px;
            top: -5px;
            " class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts --> 
                    <span class="badge badge-danger badge-counter">5 +</span>{{-- {{$notificacion}} + 
                </a> 
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Préstamos fuera de tiempo
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-user"></i>
                             </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>--}}
            @endauth
        </li> 

        </div>

        {{-- <p><a onclick="UsuariosPendientes({{ collect() }})" data-bs-toggle="modal" data-bs-target="#exampleModal_pendientes" style="color: rgb(7,189,212)"><span class="design"></span></a></p>                 
           --}}  
            
            

 {{--        <div onclick="usuarioPendientes()" class="nav-links"> --}}
            
    </div>

    </div>
</nav><br><br><br><br>

{{-- <style>
    .design  {
    background:url( 'images/usuarios_pendientes.png') no-repeat 50% 50%;
    background-size: 28px 28px;
    display: inline-block;
    height: 28px;
    width: 50px;
}
</style> --}}

{{-- <script>
      public function Notificacion_prestamos($vsprestamos){
        $count = 0; 
            foreach($vsprestamos as $key => $value){

                $fechaInicio = $value->fecha_inicio;
                $fechaActualizacion = $value->fecha_actualizacion;
                $fechaActualizacion2 = \Carbon\Carbon::parse($fechaActualizacion)->format('Y/m/d');

               $fechaActual_prestamo = Carbon::now()->parse()->format('Y/m/d');
               
                    if($fechaInicio == $fechaActualizacion2 ){
                        $fechaProxima = \Carbon\Carbon::parse($fechaInicio)->addMonths(5)->format('Y/m/d');
                    }else{
                        if($fechaActualizacion2 > $fechaInicio){
                            $fechaProxima = \Carbon\Carbon::parse($fechaActualizacion2)->addMonths(5)->format('Y/m/d');
                        }
                    }

                    if( $fechaActual_prestamo > $fechaProxima){
                       $count++;
                    }
                    
                } 

                //dd($prestamosEquipos_array);
                return $count;
    }
</script> --}}


{{-- @include('layouts.modal') --}}

