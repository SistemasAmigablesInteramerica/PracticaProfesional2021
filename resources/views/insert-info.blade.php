<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de información</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="/css/fontawesome.css">
<link rel="stylesheet" href="/css/menuinicio.css">
<link rel="stylesheet" href="/css/owl.css">
<link rel="stylesheet" href="/css/lightbox.css">


</head>
<body>
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
                    <h2>Expediente Del Beneficiario Del Comedor Estudiantil</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Nombre Completo Del Estudiante" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <input name="nationality" type="text" id="nacionalidad"  placeholder="Nacionalidad" required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="card" type="number" id="No.Cedula" placeholder="No.Cédula" pattern="" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <label for="Birthdate">Fecha de Nacimiento:</label>
                   <input name="birthdate" type="date" id="Fecha de Nacimiento" placeholder="Fecha de Nacimiento" min="1995-01-01">  
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="Birthdate">Nombre del Encargado Legal:</label>
                      <input name="legal_guardian_name" type="text" id="Nombre Del Encargado Legal" placeholder="Inserte el Nombre" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for=""></label>
                      <input name="card1" type="number" id="No.Cedula" placeholder="No.Cédula" pattern="" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                  <label for="telefono">Telefono Del Domicilio:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="2777-0000">  
                    </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                      <input name="place_residence" type="text" id="Direccion Del Domicilio" placeholder="Direccion Del Domicilio" required="">
                      </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                  <label for="archivo">Subir La Constancia Salarial:</label>
                    <input type="file" id="archivo" name="archivo" accept="image/*,.txt,.doc,.docx,.document,.pdf">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="total_income" type="text" id="total de ingresos" placeholder="₡ Total De Ingresos" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="family_member_total" type="text" id="family_member_total" placeholder="/ Numero de Miembros Familiares =" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="total_per_capita" type="text" id="per capital" placeholder=" ₡ = Per Cápita" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                  <label for="Pobreza Extrema">Pobreza Extrema</label>
                    <input type="radio" value="Pobreza Extrema." id="Pobreza Extrema" name="titulo">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                  <label for="Pobreza">Pobreza</label>
                    <input type="radio" value="Pobreza" id="Pobreza" name="titulo">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                  <label for="Vulnerabilidad">Vulnerabilidad</label>
                    <input type="radio" value="Vulnerabilidad" id="Vulnerabilidad" name="titulo">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                  <label for="No Pobre">No Pobre</label>
                    <input type="radio" value="No Pobre" id="No Pobre" name="titulo">
                    </fieldset> 
                  </div>
                  <h2>Otros Ingresos Del Grupo Familiar</h2>
                  <label for="">Ingrese Los Siguientes datos:</label>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="financial_assistence" type="text" id="total de ingresos" placeholder="₡ Ayuda Financiera" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="voluntary_assistence" type="text" id="Ayuda Voluntaria" placeholder="₡ Ayuda Voluntaria" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="rental_income" type="text" id="Arquileres" placeholder="₡ Arquileres" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="others" type="text" id="Otros" placeholder="₡ Otros(Especifique)" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="total_income" type="text" id="total de ingresos" placeholder="₡ Ingresos Totales" required="">
                    </fieldset> 
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Enviar</button>
                    </fieldset>
                  </div>
                  <!-- </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="" placeholder="" required=""></textarea>
                    </fieldset>
                  </div> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div> -->
                  <!-- <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Enviar</button>
                    </fieldset>
                  </div> -->
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
  </section>
</body>
</html>