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
                     <label for="subject">Materias:</label>
                    <select id="subject" v-model="subjectgrade.subject_id">
                      <option value="">Seleccione una materia:</option>
                      <option v-for="subject in listSubjects.data" :value="subject.id">{{subject.name}}</option>
                    </select>
                  </fieldset>
                    </div>
                    <div class="col-lg-6">
                  <fieldset>
                      <label for="grade">Grados:</label>
                      <Select v-for="grade in listGrade.data" :value="grade.id">{{grade.name}}>
                        <option></option>
                        <option></option>
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
            listsGrade: []
          }
        },
        created() {
          axios.get('/lists-grades').then(response=>{
            this.listsSubjects = response.data
          })
          axios.get('/lists-subjects').then(response=>{
            this.listsGrades = response.data
           })
        },
        methods: {
          send(){
            if(this.subjectgrade.grade_id ===''){
              Swal.fire('Atencion', 'Debe elegir un grado', 'warning')
              return false
            }
            axios.post('/store-subjectgrade', this.subjectgrade).then(response =>{
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