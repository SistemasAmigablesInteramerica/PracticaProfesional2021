<template>
    <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 470px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Editar información del profesor</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Nombre del docente</label>
                      <input name="names" v-model="teacher.names" type="text" id="name" placeholder="Nombre del docente" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <label>Apellidos del docente</label>
                    <input name="last_names" v-model="teacher.last_names" type="text" placeholder="Apellidos del docente" required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Cedula del docente</label>
                      <input name="identification" v-model="teacher.identification" type="number"  placeholder="No.Cédula" pattern="" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <label for="Birthdate">Fecha de nacimiento:</label>
                   <input name="birthdate" v-model="teacher.birthdate" type="date" placeholder="Fecha de Nacimiento" min="1995-01-01">  
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="Birthdate">Edad:</label>
                      <input name="age" v-model="teacher.age" type="number" placeholder="Edad" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="Especialidad">Especialidad:</label>
                      <input name="specialty" v-model="teacher.speciality" type="text" placeholder="Especialidad del docente" pattern="" required="">
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
                        <label for="gender">Genero:</label>
                        <select class="form-control" v-model="teacher.gender">
                        <option disabled value="">Seleccione genero</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        </select>
                    </fieldset>
                   </div>
                  <div class="col-lg-4">
                    <fieldset>
                        <label for="contact_number">Número de telefono:</label>
                         <input type="tel" v-model="teacher.contact_number" id="contact_number" name="contact_number" placeholder="7777-7777">  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset style="text-align:center">  
                      <button type="submit" @click="send" id="form-submit" class="btn btn-primary">Actualizar</button>
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
    name: 'editTeacher',
    components: {Swal},
    props: ['data_teacher'],

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

            },
            idTeacher: '' 
        }   
    },
    created(){
        const teachers = JSON.parse(this.data_teacher)
        this.idTeacher = teachers.id
        this.teacher.names = teachers.names
        this.teacher.last_names = teachers.last_names
        this.teacher.identification = teachers.identification
        this.teacher.birthdate = teachers.birthdate
        this.teacher.age = teachers.age
        this.teacher.speciality = teachers.speciality
        this.teacher.email = teachers.email
        this.teacher.gender = teachers.gender
        this.teacher.contact_number = teachers.contact_number
    },
    methods:{
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

            axios.put('/update-teacher/' + this.idTeacher, this.teacher).then(response=>{
                Swal.fire({
                    icon: 'success',
                    title: 'Datos cambiados',
                    text: 'Los datos se han editado con éxito'
                });
            }).catch(error =>{
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha encontrado un error'
                });
            })

        }
    }
}
</script>