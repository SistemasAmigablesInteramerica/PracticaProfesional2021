<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullpass Students</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('/css/menuinicio.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('/css/lightbox.css')}}">
<style lang="css">
    @yield('style')
</style>

</head>
<body>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    <!-- ***** Fin de logo ***** -->
                    <!-- ***** Inicio de botones ***** -->
                    <ul class="nav">
                        @guest
                            <li><a href="/">Iniciar Sesión</a></li>
@endguest
                        @auth
                                <li><a href="/">Inicio</a></li>
                            @endauth
                            <li class="has-sub">
                            <a href="javascript:void(0)">Expedientes comedor</a>
                            <ul class="sub-menu">
                                <li><a href="{{asset('registro-de-estudiantes')}}">Agregar estudiante</a></li>
                                @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{asset('lista-de-estudiantes')}}">Ver expedientes</a></li>
                                    @endauth
                                    <li><a href="{{asset('registro-de-familiares')}}">Agregar familiares</a></li>
                                    @auth
                                        <li><a href="{{asset('lista-de-familiares')}}">Ver familiares</a></li>
                                    @endauth
                                @endif
                            </ul>
                        </li>
                        @if (Route::has('login') )
                            @can('create_teacher')
                                <li class="has-sub">
                                    <a href="javascript:void(0)">Docentes</a>
                                    <ul class="sub-menu">
                                        @auth
                                            <li><a href="{{asset('registro-de-profesores')}}">Agregar docentes</a></li>

                                            <li><a href="{{asset('lista-de-profesores')}}">Ver docentes</a></li>
                                        @endauth

                                    </ul>
                                </li>
                            @endcan
                            <li class="has-sub">
                                <a href="javascript:void(0)">Empleos</a>
                                <ul class="sub-menu">
                                    @guest
                                        <li><a href="{{route('register')}}">Registrar</a></li>
                                    @endguest
                                    @auth
                                        <li><a href="{{asset('registro-de-empleos')}}">Formulario de empleo</a></li>

                                        <li><a href="{{asset('lista-de-aspirante')}}">ver empleos</a></li>
                                    @endauth
                                </ul>
                            </li>
                                @auth
                                <li class="has-sub">
                                    <a href="javascript:void(0)">Materias y secciones</a>
                                    <ul class="sub-menu">

                                        <li><a href="{{asset('registro-de-materias')}}">Agregar materias</a></li>
                                        <li><a href="{{asset('lista-de-materias')}}">Ver materias</a></li>
                                        <li><a href="{{asset('asignar-materia-profesor')}}">Asignar docentes</a></li>
                                        <li><a href="{{asset('lista-de-materiasyprofesores')}}">Ver doc. asig.</a></li>
                                        <li><a href="{{asset('registro-de-secciones')}}">Agregar sección</a></li>
                                        <li><a href="{{asset('lista-de-secciones')}}">Ver secciones</a></li>
                                        <li><a href="{{asset('asignar-materia-grado')}}">Asignar materia</a></li>
                                        <li><a href="{{asset('lista-de-materiasygrados')}}">Ver mat. asig.</a></li>
                                        <li><a href="{{asset('asignar-materia-estudiante')}}">Asignar estudiante</a>
                                        </li>
                                        <li><a href="{{asset('/lista-de-materiasyestudiantes')}}">Ver materia est.</a>
                                        </li>

                                    </ul>
                                </li>
                            @endauth
                        @endif
                        @if (Route::has('login'))
                            @auth
                                <li class="has-sub">
                                    <a href="javascript:void(0)">Asistencia</a>
                                    <ul class="sub-menu">

                                        <li><a href="{{asset('registro-de-asistencias')}}">Asistencia</a></li>

                                        <li><a href="{{asset('lista-de-asistencia')}}">Ver asistencias</a></li>

                                    </ul>

                                </li>
                            @endauth
                        @endif
                        @if (Route::has('login'))
                            @auth
                                <li class="has-sub">
                                    <a href="javascript:void(0)">User Perm Rol</a>
                                    <ul class="sub-menu">

                                        <li><a href="{{asset('crear-roles')}}">Crear roles</a></li>
                                        <li><a href="{{asset('lista-de-roles')}}">Ver roles</a></li>
                                        <li><a href="{{asset('asignar-rolesypermisos')}}">Asignar rol-permisos</a></li>
                                        <li><a href="{{asset('asignar-usuariosyroles')}}">Asignar rol-user</a></li>
                                        <li><a href="{{asset('crear-permisos')}}">Crear permisos</a></li>
                                        <li><a href="{{asset('lista-de-permisos')}}">Ver permisos</a></li>
                                        <li><a href="{{asset('lista-de-rolesypermisos')}}">Ver rol-perm</a></li>
                                        <li><a href="{{asset('lista-de-usuariosyroles')}}">Ver rol-user</a></li>

                                    </ul>

                                </li>

                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>



                            @endauth
                        @endif

                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Fin de botones ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="contact-us" id="app">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</section>
<section class="contact-us" id="contact">
    <div class="footer">
        <p>Copyright © 2022 Sistemas Amigables. All Rights Reserved.
            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
</section>
<script src="{{asset('js/app.js')}}" defer></script>
</body>

</html>
