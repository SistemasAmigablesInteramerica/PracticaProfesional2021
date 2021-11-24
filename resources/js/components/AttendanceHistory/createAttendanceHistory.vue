<template>
      
<section class="contact-us" id="contact">
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row" >
            <div class="col-lg-12">
                  <div class="row" method="post" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;" >
                      <div class="col-lg-12" >
                        <h2>Asistencias</h2>
                      </div>
                          <div class="col-lg-6">
                          <fieldset>
                            <label>Hora de entrada:</label>
                            <input type="datetime-local" v-model="attendancehistory.check_in" placeholder="Entrada">
                          </fieldset>
                        </div>
                          <div class="col-lg-6">
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
                            <select class="form-control" v-model="attendancehistory.subject_teacher_id">
                              <option selected disabled value="">Seleccione una clase</option>
                              <option v-for="subjectteacher in listSubjectTeacher" :value="subjectteacher.id" :key="subjectteacher.id">{{subjectteacher.id}}</option>
                            </select>
                          </fieldset>
                          </div>
                          <div class="col-lg-4">
                          <fieldset>
                            <label>Profesor:</label>
                            <select class="form-control" v-model="attendancehistory.teacher_id">
                              <option selected disabled value="">Seleccione un profesor</option>
                              <option v-for="teacher in listTeacher" :value="teacher.id" :key="teacher.id">{{teacher.names}}</option>
                            </select>
                          </fieldset>
                          <div class="col-lg-12">
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
              subject_teacher_id: '',
              teacher_id: '',
              attended: '',
            },
            listStudent: [],
            listSubjectTeacher: [],
            listTeacher: [],
          }
        },
        created(){
          axios.get('/list-student').then(response=>{
            this.listStudent = response.data
          });
           axios.get('/list-subjectteacher').then(response=>{
            this.listSubjectTeacher = response.data
          });
          axios.get('/list-teacher').then(response=>{
            this.listTeacher = response.data
          });
        var Dates = new Date().toLocaleString();
        return this.attendancehistory.check_in = Dates
        },

        methods: {
          send(){
            axios.post('/store-attendancehistory', this.attendancehistory).then(response =>{
              this.attendancehistory.check_in = '',
              this.attendancehistory.check_out = '',
              this.attendancehistory.student_id = '',
              this.attendancehistory.subject_teacher_id = '',
              this.attendancehistory.teacher_id = '',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'Se ha registrado con éxito.',  
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