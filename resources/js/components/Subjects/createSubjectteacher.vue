<template>
   <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row" style="min-height: 400px; border-radius: 20px;width: 100%;border: 20px solid white; background-color: white;margin-top:100px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Asignar docentes</h2>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                    <label for="select">Docente:</label>
                          <select class="form-control form-control-sm" v-model="subjectteacher.teacher_id">
                            <option disabled value="">Seleccione un Docente:</option>
                            <option v-for="teacher in listTeacher" :value="teacher.id" :key="teacher.id" >{{teacher.names}}</option>
                          </select>
                    </fieldset> 
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                      <label for="select">Materias:</label>
                         <select class="form-control form-control-sm" v-model="subjectteacher.subject_grade_id">
                          <option disabled value="">Seleccione una materia:</option>
                          <option v-for="subject in listsSubjects" :value="subject.id" :key="subject.id" >{{subject.name}}</option>
                         </select>
                  </fieldset>
                    </div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-sm-12" >
                    <fieldset>
                    <input v-model="subjectteacher.year" type="number" placeholder="Año">
                    </fieldset> 
                    </div>                
                    <div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;padding-top:60px;">
                    <fieldset>
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary">Asignar</button>
                    </fieldset>
                    <small style="color:#9e1205;">*Para asignar un docente debe agregar los datos de seccion y asignar la materia.*</small>
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
        name: "createSubjectteacher",
        components:{Swal},
        data() {
          return {
            subjectteacher: {
              teacher_id: '',
              subject_grade_id: '',
              year:'',

            },
            listSubjectTeacher: [],
            listsSubjects: [],
            listTeacher: [],
          }
        }, 
        created() {
            axios.get('/lists-subjects').then(response=>{
            this.listsSubjects = response.data
           })
            axios.get('/list-teacher').then(response=>{
            this.listTeacher = response.data
           })
        },
        methods: {
          send(){
            axios.post('/store-subjectteacher', this.subjectteacher).then(response =>{
               this.subjectteacher.teacher_id='',
              this.subjectteacher.subject_grade_id=''
              this.subjectteacher.year='',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El docente se ha asignado con éxito.',
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