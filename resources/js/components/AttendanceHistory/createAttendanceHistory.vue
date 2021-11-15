<template>
      
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row" >
            <div class="col-lg-12">
                
                  <div class="row" method="post" style="min-height: 550px; border-radius:10px;width: 100%;border: 10px solid white; background-color: white;" >
                      <div class="col-lg-12" >
                        <h2>Asistencias</h2>
                      </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <input name="name" type="text" v-model="attendancehistory.date" id="name" placeholder="Nombre" required="">
                          </fieldset>
                        </div>
                          <div class="col-lg-12">
                          <fieldset>
                            <input name="name" type="text" v-model="attendancehistory.check_in" id="name" placeholder="Nombre" required="">
                          </fieldset>
                        </div>
                          <div class="col-lg-12">
                          <fieldset>
                            <input name="name" type="text" v-model="attendancehistory.check_out" id="name" placeholder="Nombre" required="">
                          </fieldset>
                        </div>
                          <div class="col-lg-12">
                          <fieldset>
                            <input name="name" type="text" v-model="attendancehistory.student_id" id="name" placeholder="Nombre" required="">
                          </fieldset>
                        </div>
                          <div class="col-lg-12">
                          <fieldset>
                            <input name="name" type="text" v-model="attendancehistory.grade_subject_teacher_id" id="name" placeholder="Nombre" required="">
                          </fieldset>
                        </div>
                          <div class="col-lg-12">
                          <fieldset>
                            <input name="name" type="text" v-model="attendancehistory.attended" id="name" placeholder="Nombre" required="">
                          </fieldset>
                        </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" @click="send" class="btn btn-primary">Agregar</button>
                            </fieldset>
                          </div>
                          </div>
                         
              </div>
           </div>
        </div>
 
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
            }
          }
        },
        methods: {
          send(){
            axios.post('/store-attendancehistory', this.attendancehistory).then(response =>{
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El estudiante se ha registrado con exito.',
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