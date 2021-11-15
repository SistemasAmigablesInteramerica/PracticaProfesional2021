<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencias</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{asset('/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('/css/menuinicio.css')}}">
<link rel="stylesheet" href="{{asset('/css/owl.css')}}">
<link rel="stylesheet" href="{{asset('/css/lightbox.css')}}">



</head>
<body>

<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="/" class="logo">
                          Fullpass Students
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="/">Menu principal</a></li>
                          <li class="has-sub">   
                              <a href="javascript:void(0)">Expedientes comedor</a>
                              <ul class="sub-menu">
                                  <li><a href="/insert-studentsinfo">Agregar estudiante</a></li>
                                  <li><a href="/view-studentsinfo">Ver expedientes</a></li>
                                  <li><a href="/insert-studentrelativesinfo">Agregar familiares</a></li>
                                  <li><a href="/view-studentrelativesinfo">Ver familiares</a></li>
                              </ul>
                          </li>
                          <li class="has-sub">  
                              <a href="javascript:void(0)">Docentes</a>
                              <ul class="sub-menu">
                                  <li><a href="/insert-teacherinfo">Agregar docentes</a></li>
                                  <li><a href="/view-teacherinfo">Ver docentes</a></li>
                              </ul>
                          </li>
                          <li class="has-sub">  
                              <a href="javascript:void(0)">Materias</a>
                              <ul class="sub-menu">
                                  <li><a href="/insert-subjectinfo">Agregar materias</a></li>
                                  <li><a href="/view-subjectinfo">Ver materias</a></li>
                                  <li><a href="/insert-subject-teacherinfo">Asignar docentes</a></li>
                                  <li><a href="/view-subject-teacherinfo.">Ver asignados</a></li>
                              </ul>
                          </li>
                          <li class="has-sub">  
                              <a href="javascript:void(0)">Secciones</a>
                              <ul class="sub-menu">
                                  <li><a href="{{asset('registro-de-secciones')}}">Agregar sección</a></li>
                                  <li><a href="/view-gradeinfo">Ver secciones</a></li>
                                  <li><a href="/insert-subjectgradeinfo">Asignar materia</a></li>
                                  <li><a href="/view-subjectgradeinfo">Ver materias</a></li>
                              </ul>
                          </li>
                          <li><a href="/meetings">Meetings</a></li>
                      </ul>        
                      <a class="menu-trigger">
                          <span>Menu</span>
                      </a>  
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  
 <section class="contact-us" id="app"  >
 <div class="container"> 
  <div class="row">
    @yield('contentAttendanceHistory')
  </div>
 </div>
 </section>
 <section class="contact-us" id="contact">
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
 </section>
 <script src="{{asset('js/app.js')}}" defer></script>
</body>

</html>    
