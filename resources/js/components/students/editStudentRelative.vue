<template>
<section class="contact-us" id="contact">
        <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row" style="min-height: 320spx; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Editar familiar de estudiante</h2>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                  <fieldset>
                    <label>Cédula del estudiante:</label>
                    <input class="form-control" @change="StudentCard" v-model="card" type="number" placeholder="Cedula del estudiante" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>
                      <label>Estudiante:</label>
                        <select class="form-control" v-model="StudentRelative.student_id">
                        <option disabled value="">Seleccione estudiante</option>
                        <option v-for="student in listStudent" :value="student.id" :key="student.id">{{ student.name }}</option>
                        </select>
                    </fieldset>
                  </div>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                  <fieldset>
                    <label>Cédula del familiar:</label>
                    <input name="guardian_card" class="form-control" v-model="StudentRelative.guardian_card" type="number" id="guardian_card"  placeholder="Cedula del familiar" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>
                      <label>Nombre:</label>
                      <input name="guardian_name" class="form-control" v-model="StudentRelative.guardian_name" type="text" id="guardian_name" placeholder="Nombre del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Actividad laboral:</label>
                      <input name="guaridan_profession" class="form-control" v-model="StudentRelative.guardian_profession" type="text" id="guaridan_profession" placeholder="Empleo del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <label>Relación:</label>
                    <fieldset>
                      <input name="guardian_relation" class="form-control" v-model="StudentRelative.guardian_relation" type="text" id="guardian_relation"  placeholder="Parentesco del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Escolaridad:</label>
                      <input name="scholarship" class="form-control" v-model="StudentRelative.scholarship" type="text" id="scholarship"  placeholder="Escolaridad">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                      <br>
                  <label>Recibe ayuda financiera</label>
                  <input style="width: 1em; height: 1em; margin-top: .25em; vertical-align:top; border-radius:.25em" v-model="StudentRelative.guardian_receives_aid" type="checkbox" value="guardian_receives_aid">
                  </fieldset>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <label>Total de ayuda finaciera:</label>
                    <input class="form-control" v-model="StudentRelative.guardian_aid_total" type="number" id="guardian_aid_total"  placeholder="Monto de ayuda financiera" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <label>Salario:</label>
                    <input class="form-control" v-model="StudentRelative.guardian_salary" type="number" id="guardian_salary"  placeholder="Salario" min="1">
                  </fieldset>
                  </div>
                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset style="text-align:center;padding-top:60px;">
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
    name: 'editStudentrelative',
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
        const StudentRelatives = JSON.parse(this.data_studentrelative)
        this.idStudentrelative = StudentRelatives.id
        this.StudentRelative.student_id = StudentRelatives.student_id
        this.StudentRelative.guardian_name = StudentRelatives.guardian_name
        this.StudentRelative.guardian_profession = StudentRelatives.guardian_profession
        this.StudentRelative.guardian_card = StudentRelatives.guardian_card
        this.StudentRelative.guardian_relation = StudentRelatives.guardian_relation
        this.StudentRelative.scholarship = StudentRelatives.scholarship
        this.StudentRelative.guardian_receives_aid = StudentRelatives.guardian_receives_aid
        this.StudentRelative.guardian_aid_total = StudentRelatives.guardian_aid_total
        this.StudentRelative.guardian_salary = StudentRelatives.guardian_salary

        axios.get('/list-student').then(response=>{
            this.listStudent = response.data
        console.log('revisando información', this.listStudent)
      })

    },
    methods: {
            StudentCard(){
                axios.get('/lista-studentcard/' + this.card).then(response=>{
                    response.data.forEach(student => {
                        console.log(student.name)
                        this.StudentRelative.student_id = student.id
                    });
                })
            },
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

            axios.put('/update-studentrelative/'+ this.idStudentrelative, this.StudentRelative).then(response=>{
                Swal.fire({
                    icon: 'success',
                    title: 'Datos cambiados',
                    text: 'Los datos se han editado con éxito'
                });
                 window.location.href = '/lista-de-familiares '
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
