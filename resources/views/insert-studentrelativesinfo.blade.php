<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion familiar</title>

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
              <form id="contact" action="" method="post" style = "border-radius:20px">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Agregar familiar de estudiante</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <label for=""></label>
                      <input name="guardian_name" type="text" id="guardian_name" placeholder="Nombre del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="guardian_card">Cédula:</label>
                    <input name="guardian_card" type="number" id="guardian_card"  placeholder="Cedula del familiar" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <label for=""></label>
                      <input name="guaridan_profession" type="text" id="guaridan_profession" placeholder="Profesión del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for=""></label>
                      <input name="guardian_relation" type="text" id="guardian_relation"  placeholder="Parentesco del familiar">
                    </fieldset>
                  </div>  
                  <div class="col-lg-4">
                  <label><input name="guardian_recieves_aid" type="checkbox" id="guardian_recieves_aid" value="first_checkbox">Recibe ayuda financiera</label>
                  </div>  
                  <div class="col-lg-4">
                  <fieldset>
                    <br>
                    <label for="guardian_aid_total">Monto de ayuda financiera:</label>
                    <input name="guardian_aid_total" type="number" id="guardian_aid_total"  placeholder="Monto de ayuda financiera" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="scholarship" type="text" id="scholarship"  placeholder="Escolaridad">
                    </fieldset>
                  </div>
                  <fieldset>
                    <label for="guardian_salary">Salario:</label>
                    <input name="guardian_salary" type="number" id="guardian_salary"  placeholder="Salario" min="1">
                  </fieldset>
                  </div>
                 <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Enviar</button>
                    </fieldset>
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