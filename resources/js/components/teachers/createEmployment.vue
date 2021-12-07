<template>
   <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Formulario de intermediación de empleo</h2>
                    <p>El Colegio Técnico Profesional de Quepos está comprometido con la calidad educativa, por lo que le solicitamos atentamente su colaboración completando el siguiente formulario con el fin de mejorar el servicio que brindamos.</p>
                    <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Correo electronico:</label>
                      <input name="email" class="form-control" v-model="employment.email" type="text" placeholder="Correo electronico">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <label>Nombre completo</label>
                    <input name="name" class="form-control" v-model="employment.name" type="text"  placeholder="Nombre completo">
                  </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Especialidad:</label>
                      <select v-model="employment.speciality" class="form-control">
                          <option disabled selected value="">Seleccione la especialidad</option>
                          <option value="hotel_events">Hotelería y eventos especiales</option>
                          <option value="food_drinks">Alimentos y bebidas</option>
                          <option value="accounting">Contabilidad</option>
                          <option value="computing">Informática</option>
                          <option value="occupational_health">Salud ocupacional</option>
                          <option value="executive_services">Ejecutivo para centro de servicio</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label for="card">Cédula:</label>
                         <input type="number" class="form-control" v-model="employment.card" id="card" name="card" placeholder="Cédula">  
                    </fieldset>
                   </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                    <label for="phone_number">Télefono:</label>
                   <input name="phone_number" class="form-control" v-model="employment.phone_number" type="number" id="phone_number" placeholder="2777-0000">  
                  </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4col-sm-4">
                  <fieldset>
                  <label for="place_residence">Dirección exacta:</label>
                      <input name="place_residence" class="form-control" v-model="employment.place_residence" type="text" id="place_residence" placeholder="Lugar de residencia">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label for="titles">Titulos y capacitaciones:</label>
                      <input name="titles" class="form-control" v-model="employment.titles" type="text" id="titles" placeholder="Títulos y capacitaciones">
                    </fieldset>
                  </div>
                   <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label>Trabaja actualmente</label>
                        <input v-model="employment.do_work" type="checkbox" style="width: 1em; height: 1em; margin-top: .25em; vertical-align:top; border-radius:.25em">
                    </fieldset>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label>Registrado en buscoempleocr.com</label>
                        <input v-model="employment.in_empleocr" type="checkbox" style="width: 1em; height: 1em; margin-top: .25em; vertical-align:top; border-radius:.25em">
                    </fieldset>
                   </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label for="contact_number">Condiciones del trabajo solicitado:</label>
                         <input class="form-control" type="text" v-model="employment.conditions" id="conditions" name="conditions" placeholder="Condiciones del trabajo solicitado">  
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label for="contact_number">Lugares donde le gustaría trabajar:</label>
                         <input class="form-control" type="text" v-model="employment.place_likeness" id="place_likeness" name="place_likeness" placeholder="Lugares donde le gustaría trabajar">  
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>¿Es usted egresado(a) o miembro de la comunidad?</label>
                      <select v-model="employment.graduate_status" class="form-control">
                          <option disabled selected value="">Seleccione su respuesta</option>
                          <option value="graduate">Egresado</option>
                          <option value="community_member">Miembro de la comunidad</option>
                      </select>
                    </fieldset>
                  </div>
                  <small>Curriculum digital <br> Si ya cuenta con un curriculum digital en formato .pdf, nos lo puede enviar a la dirección de correo electrónico: marvin.rodriguez.ramirez@mep.go.cr</small>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset style="text-align:center;padding-top:60px">  
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
import Swal from 'sweetalert2'
export default {
    name: 'insertEmployment',
    components: {Swal},

    data(){
        return{
            employment:{
                email: '',
                name: '',
                speciality: '',
                card: '',
                phone_number: '',
                place_residence: '',
                titles: '',
                do_work: '',
                in_empleocr: '',
                conditions: '',
                place_likeness: '',
                graduate_status: '',
            }
        }
    },

    methods:{
        send(){
            axios.post('/store-employment', this.employment).then(response=>{
                Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'Los datos de empleo han sido registrados',
                });
            }).catch(error=>{
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha producido un error',
                });
            })
        }
    }
}
</script>