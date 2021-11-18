<template>
   <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Formulario de intermediación de empleo</h2>
                    <p>El Colegio Técnico Profesional de Quepos está comprometido con la calidad educativa, por lo que le solicitamos atentamente su colaboración completando el siguiente formulario con el fin de mejorar el servicio que brindamos.</p>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Correo electronico:</label>
                      <input name="email" v-model="employment.email" type="text" id="email" placeholder="Correo electronico">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <label>Nombre completo</label>
                    <input name="name" v-model="employment.name" type="text" id="email"  placeholder="Nombre completo">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Especialidad:</label>
                      <select v-model="employment.speciality" class="form-control">
                          <option disabled selected>Seleccione la especialidad</option>
                          <option value="hotel_events">Hotelería y eventos especiales</option>
                          <option value="food_drinks">Alimentos y bebidas</option>
                          <option value="accounting">Contabilidad</option>
                          <option value="computing">Informática</option>
                          <option value="occupational_health">Salud ocupacional</option>
                          <option value="executive_services">Ejecutivo para centro de servicio</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="card">Cédula:</label>
                         <input type="number" v-model="employment.card" id="card" name="card" placeholder="Cédula">  
                    </fieldset>
                   </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <label for="phone_number">Télefono:</label>
                   <input name="phone_number" v-model="employment" type="integer" id="phone_number" placeholder="2777-0000">  
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="place_residence">Dirección exacta:</label>
                      <input name="place_residence" v-model="employment.residence" type="number" id="place_residence" placeholder="Lugar de residencia">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="titles">Titulos y capacitaciones:</label>
                      <input name="specialty" v-model="teacher.speciality" type="text" id="specialty" placeholder="Títulos y capacitaciones" pattern="">
                    </fieldset>
                   <div class="col-lg-4">
                    <fieldset>
                        <label>Trabaja actualmente</label>
                        <input v-model="employment.do_work" type="checkbox" style="width: 1em; height: 1em; margin-top: .25em; vertical-align:top; border-radius:.25em">
                    </fieldset>
                   </div>
                   <div>
                    <fieldset>
                        <label>registrado en buscoempleocr.com</label>
                        <input v-model="employment.in_empleocr" type="checkbox" style="width: 1em; height: 1em; margin-top: .25em; vertical-align:top; border-radius:.25em">
                    </fieldset>
                   </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="contact_number">Condiciones del trabajo solicitado:</label>
                         <input type="text" v-model="employment.conditions" id="conditions" name="conditions" placeholder="Condiciones del trabajo solicitado">  
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="contact_number">Lugares donde le gustaría trabajar:</label>
                         <input type="text" v-model="employment.place_likeness" id="place_likeness" name="place_likeness" placeholder="Lugares donde le gustaría trabajar">  
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>¿Es usted egresado(a) o miembro de la comunidad?</label>
                      <select v-model="employment.speciality" class="form-control">
                          <option disabled selected>Seleccione su respuesta</option>
                          <option value="graduate">Egresado</option>
                          <option value="community_member">Miembro de la comunidad</option>
                      </select>
                    </fieldset>
                  </div>
                  <small>Curriculum digital <br> Si ya cuenta con un curriculum digital en formato .pdf, nos lo puede enviar a la dirección de correo electrónico: marvin.rodriguez.ramirez@mep.go.cr</small>
                  <div class="col-lg-12">
                    <fieldset style="text-align:center">  
                      <button type="submit" @click="send" id="form-submit" class="btn btn-primary">Registrar</button>
                    </fieldset>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </section>
</template>

<script>
export default {
    
}
</script>