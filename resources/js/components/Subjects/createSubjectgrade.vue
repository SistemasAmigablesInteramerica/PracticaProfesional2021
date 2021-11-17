 <template>

         
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
            <div class="col-lg-12">
                  <div class="col-lg-12">
                    <h2>Asignar materia a un grado</h2>
                  </div>
                  <div class="col-lg-6">
                  <fieldset>
                     <label>Materias:</label>
                    <select v-model="subjectgrade.subject_id">
                      <option disabled value="">Seleccione una materia:</option>
                      <option v-for="subject in listsSubjects" :value="subject.id" key="subject_id" >{{subject.name}}</option>
                    </select>
                  </fieldset>
                    </div>
                    <div class="col-lg-6">
                  <fieldset>
                      <label>Grados:</label>
                      <Select v-model="subjectgrade.grade_id">
                        <option disabled value="">Seleccione un grado:</option>
                        <option v-for="grade in listsGrades" :key="grade_id" value="grade.id">{{grade.name}}</option>
                      </select>
                  </fieldset>
                    </div>
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