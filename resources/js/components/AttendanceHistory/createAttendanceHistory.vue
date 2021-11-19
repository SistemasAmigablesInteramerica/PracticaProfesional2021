<template>
      
<section class="contact-us" id="contact">
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row" >
            <div class="col-lg-12">
                
                  <div class="row" method="post" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;" >
                      <div class="col-lg-12" >
                        <h2>Asistencias</h2>
                      </div>
                        <div class="col-lg-4">
                          <fieldset>
                            <label>Nombre del estudiante:</label>
                            <input type="text" v-model="attendancehistory.date" placeholder="Nombre">
                          </fieldset>
                        </div>
                          <div class="col-lg-4">
                          <fieldset>
                            <label>Hora de entrada:</label>
                            <input type="datetime-local" v-model="attendancehistory.check_in" placeholder="Entrada">
                          </fieldset>
                        </div>
                          <div class="col-lg-4">
                          <fieldset>
                            <label>Hora de salida:</label>
                            <input type="datetime-local" v-model="attendancehistory.check_out" placeholder="Salida">
                          </fieldset>
                        </div>
                          <div class="col-lg-4">
                          <fieldset>
                            <label>Estudiante:</label>
                            <select class="form-control" v-model="attendancehistory.student_id">
                              <option selected disabled value="">Seleccione un estudiante</option>
                              <option v-for="student in listStudent" :value="student.id" :key="student.id">{{student.name}}</option>
                            </select>
                          </fieldset>
                        </div>
                          <div class="col-lg-4">
                          <fieldset>
                            <label>Clase:</label>
                            <input type="text" v-model="attendancehistory.grade_subject_teacher_id" placeholder="ID Clase">
                          </fieldset>
                        </div>
                          <div class="col-lg-4">
                          <fieldset>
                            <label>Asistió:</label>
                            <input style="width: 2em; height: 2em; margin-top: .25em; vertical-align:top; border-radius:.25em" type="checkbox" v-model="attendancehistory.attended" placeholder="Atendio">
                          </fieldset>
                        </div>
                          <div class="col-lg-4">
                            <fieldset>
                              <button type="submit" id="form-submit" @click="send" class="btn btn-primary">Agregar</button>
                            </fieldset>
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
        name: "createAttendancehistory",
        components:{Swal},
        data() {
          return {
            attendancehistory: {
              name: '',
              check_in: '',
              check_out: '',
              student_id: '',
              grade_subject_teacher_id: '',
              attended: '',
            },
            listStudent: [],
            listGradeSubjectTeacher: []
          }
        },
        created(){
          axios.get('list-student').then(response=>{
            this.listStudent = response.data
          })
        },

        methods: {
          send(){
            axios.post('/store-attendancehistory', this.attendancehistory).then(response =>{
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'Se ha registrado con exito.',
                });
            }).catch(error => {
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha encontrado un error.',
                    });

            })
          }
        }
    }

</script>