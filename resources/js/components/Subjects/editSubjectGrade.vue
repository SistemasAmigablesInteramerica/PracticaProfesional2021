<template>

  <section class="contact-us" id="contact">       
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 350px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
            <div class="col-lg-12">
                  <div class="col-lg-12">
                    <h2>Asignar materia a un grado</h2>
                  </div>
                  <div class="col-lg-12">
                  <fieldset>
                     <label>Materias:</label>
                    <select class="form-select form-select-sm" v-model="subjectgrade.subject_id">
                      <option disabled value="">Seleccione una materia:</option>
                      <option v-for="subject in listsSubjects" :value="subject.id" key="subject_id" >{{subject.name}}</option>
                    </select>
                  </fieldset>
                    </div>
                    <div class="col-lg-12">
                  <fieldset>
                      <label>Grados:</label>
                      <select class="form-select form-select-sm" v-model="subjectgrade.grade_id" >
                        <option disabled value="">Seleccione un grado:</option>
                        <option v-for="grade in listsGrades" :value="grade.id" key="grade_id">{{grade.name}}</option>
                      </select>
                  </fieldset>
                    </div>
                    <br>
                <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary">Asignar</button>
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
        name: "createSubjectgrade",
        components:{Swal},
        data() {
          return {
            subjectgrade: {
              grade_id: '',
              subject_id: '',
            },
            listsSubjects: [],
            listsGrades: []
          }
        },
        created() {
            axios.get('/lists-subjects').then(response=>{
            this.listsSubjects = response.data
           })
          axios.get('/lists-grades').then(response=>{
            this.listsGrades = response.data
          })
        },
        methods: {
          send(){
                if(this.subjectgrade.grade_id === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El grado no puede estar vacío'
            })
            return false
          }
          if(this.subjectgrade.subject_id === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'La materia no puede estar vacía'
            })
            return false
          }
            axios.post('/store-subjectgrade', this.subjectgrade).then(response =>{
              this.subjectgrade.grade_id='',
              this.subjectgrade.subject_id=''
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