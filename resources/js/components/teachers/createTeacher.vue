<template>
    <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Información del profesor</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="names" v-model="teacher.names" type="text" id="name" placeholder="Nombre del docente" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <input name="last_names" v-model="teacher.last_names" type="text" id="nacionalidad"  placeholder="Apellidos del docente" required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="identification" v-model="teacher.identification" type="number" id="No.Cedula" placeholder="No.Cédula" pattern="" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <label for="Birthdate">Fecha de nacimiento:</label>
                   <input name="birthdate" v-model="teacher.birthdate" type="date" id="Fecha de Nacimiento" placeholder="Fecha de Nacimiento" min="1995-01-01">  
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="Birthdate">Edad:</label>
                      <input name="age" v-model="teacher.age" type="number" id="age" placeholder="Edad" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="Especialidad"></label>
                      <input name="specialty" v-model="teacher.speciality" type="text" id="specialty" placeholder="Especialidad del docente" pattern="" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="email">Correro electronico:</label>
                         <input type="email" v-model="teacher.email" id="email" name="email" placeholder="ejemplo@gmail.com">  
                    </fieldset>
                   </div>
                   <div class="col-lg-4">
                    <fieldset>
                      <br>
                        <label for="gender">Genero:</label>
                        <select v-model="teacher.gender">
                        <option disabled value="">Seleccione genero</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        </select>
                    </fieldset>
                   </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="contact_number">Correro electronico:</label>
                         <input type="tel" v-model="teacher.contact_number" id="contact_number" name="contact_number" placeholder="7777-7777">  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>  
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
            axios.post('/store-teacher', this.teacher).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Exito',
                    text: 'El profesor se ha registrado con exito',
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