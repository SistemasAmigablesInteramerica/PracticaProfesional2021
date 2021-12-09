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



</head>
<body>
{{Auth::user()}}
<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{asset('/')}}" class="logo">
                          Fullpass Students
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">

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
                          @if (Route::has('login'))

                          <li class="has-sub">
                              <a href="javascript:void(0)">Docentes</a>
                              <ul class="sub-menu">
                                  @auth
                                  <li><a href="{{asset('registro-de-profesores')}}">Agregar docentes</a></li>

                                  <li><a href="{{asset('lista-de-profesores')}}">Ver docentes</a></li>
                                  @endauth
                                  <li><a href="{{asset('registro-de-empleos')}}">Formulario de empleo</a></li>
                                  @auth
                                  <li><a href="{{asset('lista-de-aspirante')}}">ver empleos</a></li>
                                  @endauth

                              </ul>
                          </li>

                          @endif
                          @if (Route::has('login'))
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

                                  <li><a href="{{asset('asignar-materia-estudiante')}}">Asignar estudiante</a></li>

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
                          @endauth
                          @endif

                        <li>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>

                        </li>


                      <a class="menu-trigger">
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>

<section class="contact-us" id="app">
<div class="container">
    <div class="row">
    <section class="section main-banner" id="top" data-section="section1" >
  <video autoplay muted loop id="bg-video">
    <source src="/images/videoinicio.mp4" type="video/mp4">
  </video>

<div class="video-overlay header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="caption">
          <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" style="min-height: 300px; border-radius: 20px;width: 100%;border: 20px solid white; background-color: white">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-control form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12">
    <div class="row" style="padding-top:50px;">
    </div>
  </div>
        </div>
      </div>
    </div>
</div>
</section>
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
