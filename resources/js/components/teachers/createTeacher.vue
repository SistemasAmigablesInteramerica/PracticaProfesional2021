<template>
    <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row" style="min-height: 470px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Información del profesor</h2>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Nombre del docente</label>
                      <input name="names" v-model="teacher.names" class="form-control" type="text" id="name" placeholder="Nombre del docente" required="">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <label>Apellidos del docente</label>
                    <input name="last_names" v-model="teacher.last_names" class="form-control" type="text" placeholder="Apellidos del docente" required="">
                  </fieldset>
                  <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Cedula del docente</label>
                      <input name="identification" v-model="teacher.identification" class="form-control" type="number"  placeholder="No.Cédula" pattern="" required="">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                    <label for="Birthdate">Fecha de nacimiento:</label>
                   <input name="birthdate" v-model="teacher.birthdate" class="form-control" type="date" placeholder="Fecha de Nacimiento" min="1995-01-01">
                  </fieldset>
                  <br>
                  </div>
                   <!--<div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                  <label for="Birthdate">Edad:</label>
                      <input name="age" v-model="teacher.age" class="form-control" type="number" placeholder="Edad" required="">
                    </fieldset>
                    <br>
                  </div>-->
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label for="Especialidad">Especialidad:</label>
                      <input name="specialty" v-model="teacher.speciality" class="form-control" type="text" placeholder="Especialidad del docente" pattern="" required="">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label for="email">Correro electronico:</label>
                         <input class="form-control" type="email" v-model="teacher.email" id="email" name="email" placeholder="ejemplo@gmail.com">
                    </fieldset>
                    <br>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label for="gender">Genero:</label>
                        <select class="form-control" v-model="teacher.gender">
                        <option disabled value="">Seleccione genero</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        </select>
                    </fieldset>
                    <br>
                   </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                        <label for="contact_number">Número de telefono:</label>
                         <input class="form-control" type="tel" v-model="teacher.contact_number" id="contact_number" name="contact_number" placeholder="77777777">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-12">
                    <fieldset style="text-align:center; padding-top:35px;">
                      <button type="submit" @click="send" id="form-submit" class="btn btn-primary">Registrar</button>
                    </fieldset>
                    <br>
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
    name: "createTeacher",
    components: {Swal},

    data() {
        return {
            teacher: {
                names: '',
                last_names: '',
                identification: '',
                birthdate: '',
                age: '',
                speciality: '',
                email: '',
                gender: '',
                contact_number: '',

            }
        }
    },
    methods: {
        send(){
          if(this.teacher.name === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir el nombre'
            })
            return false
          }
          if(this.teacher.last_names === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir los apellidos'
            })
            return false
          }
          if(this.teacher.identification === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir la cédula'
            })
            return false
          }
          if(this.teacher.birthdate === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir la fecha de nacimiento'
            })
            return false
          }
          if(this.teacher.age === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir la edad'
            })
            return false
          }
          if(this.teacher.speciality === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir la especialidad'
            })
            return false
          }
          if(this.teacher.email === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir el correo electronico'
            })
            return false
          }
          if(this.teacher.gender === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir el genero'
            })
            return false
          }
          if(this.teacher.contact_number === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe introducir el numero de telefono'
            })
            return false
          }


            axios.post('/store-teacher', this.teacher).then(response => {
              this.teacher.names = '',
              this.teacher.last_names = '',
              this.teacher.birthdate = '',
              this.teacher.identification = '',
              this.teacher.age = '',
              this.teacher.email = '',
              this.teacher.speciality = '',
              this.teacher.gender = '',
              this.teacher.contact_number = '',

                Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El profesor se ha registrado con éxito',
                });
            }).catch(error => {
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
