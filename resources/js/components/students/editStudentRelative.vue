<template>
<section class="contact-us" id="contact">
        <div class="container">
      <div class="row">
        <div class="col-lg-9">  
          <div class="row" style="min-height: 320px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Agregar familiar de estudiante</h2>
                  </div>  
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Estudiante:</label>
                        <select class="form-control" v-model="StudentRelative.student_id">
                        <option disabled value="">Seleccione estudiante</option>
                        <option :value="data_studentrelative.student.id">{{ data_studentrelative.student.name }}</option>
                        </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Nombre:</label>
                      <input class="form-control" v-model="data_studentrelative.guardian_name" type="text" placeholder="Nombre del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Actividad laboral:</label>
                      <input class="form-control" v-model="data_studentrelative.guardian_profession" type="text" placeholder="Empleo del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <label>Cédula:</label>
                    <input class="form-control" v-model="data_studentrelative.guardian_card" type="number" placeholder="Cedula del familiar" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <label>Relación:</label>
                    <fieldset>
                      <input class="form-control" v-model="data_studenttelative.guardian_relation" type="text" placeholder="Parentesco del familiar">
                    </fieldset>
                  </div>  
                  <div class="col-lg-4">
                    <fieldset> 
                      <label>Escolaridad:</label>
                      <input class="form-control" v-model="data_studentrelative.scholarship" type="text" placeholder="Escolaridad">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <br>
                  <label>Recibe ayuda financiera</label>
                  <input style="width: 1em; height: 1em; margin-top: .25em; vertical-align:top; border-radius:.25em" v-model="data_studentrelative.guardian_receives_aid" type="checkbox">
                  </fieldset>
                </div>  
                  <div class="col-lg-4">
                  <fieldset>
                    <label>Total de ayuda finaciera:</label>
                    <input class="form-control" v-model="data_studentrelative.guardian_aid_total" type="number" placeholder="Monto de ayuda financiera" min="0">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <label>Salario:</label>
                    <input class="form-control" v-model="data_studentrelative.guardian_salary" type="number" placeholder="Salario" min="0">
                  </fieldset>
                  </div>
                 <div class="col-lg-12">
                   <br>
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
import Swal from 'sweetalert2'
export default {
    name: "editStudentrelative",
    props:[
        'data_studentrelative'
    ],
    components:{Swal},
    data(){
        return{
            StudentRelative: {
                student_id: '',
                guardian_name: '',
                guardian_profession: '',
                guardian_card: '',
                guardian_relation: '',
                scholarship: '',
                guardian_receives_aid: '',
                guardian_aid_total: '',
                guardian_salary: ''
            },
            idStudentrelative: '',
            listStudent:[],
        }
    },
    created(){
        const studentrelative = JSON.parse(this.data_studentrelative)
        this.idStudentrelative = studentrelative.id
        this.student_id = this.data_studentrelative.student_id
        this.guardian_name = this.data._studentrelative.guardian_name
        this.guardian_profession = this.data_studentrelative.guardian_profession
        this.guardian_card = this.data_studentrelative.guardian_card
        this.guardian_relation = this.data_studentrelative.guardian_relation
        this.scholarship = this.data_studentrelative.scholarship
        this.guardian_receives_aid = this.data_studentrelative.guardian_receives_aid
        this.guardian_aid_total = this.data_studentrelative.guardian_aid_total
        this.guardian_salary = this.data_studentrelative.guardian_salary

        axios.get('/list-student').then(response=>{
        this.listStudent = response.data
        console.log('revisando información', this.listStudent)
      })

    },
    methods: {
        send(){
            if(this.StudentRelative.student_id === ''){
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe introducir el estudiante'
                })
                return false
            }
            if(this.StudentRelative.guardian_name === ''){
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe introducir el nombre'
                })
                return false
            }
            if(this.StudentRelative.guardian_profession === ''){
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe introducir la actividad laboral'
                })
                return false
            }
            if(this.StudentRelative.guardian_card === ''){
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe introducir la cédula'
                })
                return false
            }
            if(this.StudentRelative.guardian_relation === ''){
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe introducir la relación familiar'
                })
                return false
            }
            if(this.StudentRelative.scholarship === ''){
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe introducir la escolaridad'
                })
                return false
            }

            axios.put('/update-studentrelative/'+ this.idStudentrelative).then(response=>{
                Swal.fire({
                    icon: 'success',
                    Title: 'Datos cambiados',
                    text: 'El familiar'
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