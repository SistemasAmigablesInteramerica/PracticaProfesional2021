<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar docentes</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="/css/fontawesome.css">
<link rel="stylesheet" href="/css/menuinicio.css">
<link rel="stylesheet" href="/css/owl.css">
<link rel="stylesheet" href="/css/lightbox.css">

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
                              <a href="javascript:void(0)">Expediente estudiantes</a>
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
                              </ul>
                          </li>
                          <li class="has-sub">  
                              <a href="javascript:void(0)">Secciones</a>
                              <ul class="sub-menu">
                                  <li><a href="/insert-gradeinfo">Agregar sección</a></li>
                                  <li><a href="/view-gradeinfo">Ver secciones</a></li>
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

<section class="contact-us" id="contact">
<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post" style ="border-radius:20px">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Información del profesor</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="names" type="text" id="name" placeholder="Nombre del docente" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <input name="last_names" type="text" id="nacionalidad"  placeholder="Apellidos del docente" required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="identification" type="number" id="No.Cedula" placeholder="No.Cédula" pattern="" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <label for="Birthdate">Fecha de nacimiento:</label>
                   <input name="birthdate" type="date" id="Fecha de Nacimiento" placeholder="Fecha de Nacimiento" min="1995-01-01">  
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="Birthdate">Edad:</label>
                      <input name="age" type="number" id="age" placeholder="Edad" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="Especialidad"></label>
                      <input name="specialty" type="text" id="specialty" placeholder="Especialidad del docente" pattern="" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="email">Correro electronico:</label>
                         <input type="email" id="email" name="email" placeholder="ejemplo@gmail.com">  
                    </fieldset>
                   </div>
                   <div class="col-lg-4">
                    <fieldset>
                      <br>
                        <label for="gender">Genero:</label>
                        <select>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        </select>
                    </fieldset>
                   </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="contact_number">Correro electronico:</label>
                         <input type="tel" id="contact_number" name="contact_number" placeholder="7777-7777">  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Enviar</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
  </section>
</body>
</html>