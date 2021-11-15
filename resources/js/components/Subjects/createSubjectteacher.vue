<template>
   
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 550px; border-radius:10px;width: 100%;border: 10px solid white; background-color: white;" >
            <div class="col-lg-12">
                  <div class="col-lg-12">
                    <h2>Asignar docentes</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <label for="select">Docente:</label>
                        <select v-model="subjectteacher.teacher_id">
                        <option  disabled value="">Elige un docente</option>
                        <option value="1">Tony Madrigal</option>
                        <option value="2">Abel</option>
                        <option value="3">Stefany</option>
                        </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                      <label for="select">Materias:</label>
                        <select v-model="subjectteacher.subject_grade_id">
                        <option disabled value="">Elige una materia</option>
                        <option value="10">Ciencias</option>
                        <option value="11">Matematicas</option>
                        <option value="12">Ingles</option>
                        </select>
                  </fieldset>
                    </div>
                    <div class="col-lg-4">
                    <fieldset>
                    <input name="year" type="number" v-model="subjectteacher.year" id="year"  placeholder="Año">
                    </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                        <br>
                        <br>
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary">Añadir</button>
                    </fieldset>
                  </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  import Swal from 'sweetalert2'
    export default {
        name: "createSubjectteacher",
        components:{Swal},
        data() {
          return {
            subjectteacher: {
              teacher_id: '',
              subject_grade_id: '',
              year:'',

            }
          }
        },
        methods: {
          send(){
            axios.post('/store-subjectteacher', this.subjectteacher).then(response =>{
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