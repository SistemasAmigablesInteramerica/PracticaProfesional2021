<template>

<section class="contact-us" id="contact">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="row" method="post" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;" >
                      <div class="col-lg-12 col-md-12 col-sm-12" >
                        <h2>Asistencias</h2>
                      </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                          <fieldset>
                            <label>Fecha de entrada:</label><br>
                            <input class="form-control" type="date" v-model="attendancehistory.date" placeholder="Entrada">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <fieldset>
                            <label>Hora de entrada:</label>
                            <input class="form-control" type="text" v-model="attendancehistory.check_in" placeholder="00:00">
                          </fieldset>
                        </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <fieldset>
                            <label>Hora de salida:</label>
                            <input class="form-control" type="text" v-model="attendancehistory.check_out" placeholder="Salida">
                          </fieldset>
                        </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <fieldset>
                            <label>Estudiante:</label>
                            <select class="form-control" @change="StudentName" v-model="attendancehistory.student_id">
                              <option selected disabled value="">Seleccione un estudiante</option>
                              <option v-for="student in listStudent" :value="student.id" :key="student.id">{{student.name}}</option>
                            </select>
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <fieldset>
                            <label>Cedula:</label>
                            <input class="form-control" type="text" @change="StudentCard" v-model="card" placeholder="Salida">
                          </fieldset>
                        </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <fieldset>
                            <label>Profesor:</label>
                            <select class="form-control" v-model="attendancehistory.teacher_id">
                              <option selected disabled value="">Seleccione un profesor</option>
                              <option v-for="teacher in listTeacher" :value="teacher.id" :key="teacher.id">{{teacher.names}}</option>
                            </select>
                          </fieldset>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                          <fieldset style="margin-left:50%;">
                            <label>Asistió:</label>
                            <input class="form-check" style="width: 2em; height: 2em; margin-top: .25em; vertical-align:top; border-radius:.25em ;" type="checkbox" v-model="attendancehistory.attended" placeholder="Atendio">
                          </fieldset>
                        </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <fieldset style="text-align:center;padding-top:60px;">
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
              date: '',
              student_id: '',
              teacher_id: '',
              attended: '',
            },
            listStudent: [],
            listSubjectTeacher: [],
            listTeacher: [],
            listAttendancehistory: [],
            card: '',
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
          axios.get('/list-attendanceHistory').then(response=>{
            this.listAttendancehistory = response.data
          });
        var Dates = new Date().toISOString().slice(0,10);
        this.attendancehistory.date = Dates;
        var Hour = new Date().toLocaleTimeString();
        this.attendancehistory.check_in = Hour;

        },

        methods: {

            StudentName(){

            },

            StudentCard(){
                axios.get('/lista-studentcard/' + this.card).then(response=>{
                    response.data.forEach(student => {
                        console.log(student.name)
                        this.attendancehistory.student_id = student.id
                    });


                })
            },

            StudentFind(){

                if(attendancehistory.name === listAttendancehistory.student.name && Dates === listAttendancehistory.attendancehistory.date){
                    Swal.fire({
                        title: 'Error',
                        icon: 'error',
                        text: 'El estudiante se encuentra en el comedor'
                    }).then((result)=>{
                        if (result.isConfirmed){
                            this.attendancehistory.student_id = ''
                        }
                    })
                }
            },
          send(){
            axios.post('/store-attendancehistory', this.attendancehistory).then(response =>{
              this.attendancehistory.check_in = '',
              this.attendancehistory.check_out = '',
              this.attendancehistory.student_id = '',
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
