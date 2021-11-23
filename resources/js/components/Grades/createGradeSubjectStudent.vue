<template>
      <section id="contact" style="min-height: 350px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
         <div class="col-lg-12">
          <div class="row" >
            <div class="col-lg-12">
                <div class="row" >
                  <div class="col-lg-12">
                    <h2>Asignar grado a materia y estudiante</h2>
                    </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <label>ID del estudiante:</label>
                      <select  class="form-control" v-model="gradesubjectstudent.student_id">
                      <option disabled value="">ID del estudiante</option>
                        <option v-for="student in listStudent" :value="student.id" :key="student.id">{{ student.name }}</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <label>Materias:</label>
                     <select class="form-control" v-model="gradesubjectstudent.subject_grade_id">
                        <option disabled value="">Escoger materia</option>
                       <option v-for="subject in listsSubjects" :value="subject.id" key="subject_id" >{{subject.name}}</option>
                      </select> 
                    </fieldset>
                 </div>
                 <div class="col-lg-4">
                  <fieldset>
                  <label>Curso lectivo:</label>
                    <input type="text" v-model="gradesubjectstudent.year" placeholder="Año">
                    </fieldset>
                    </div>
                 <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary" >Asignar</button>
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
        name: "createGradeSubjectStudent",
        components:{Swal},
        data() {
          return {
            gradesubjectstudent: {
              subject_grade_id: '',
              student_id: '',
              year: '',
            },
            listsGrades: [],
            listsSubjects: [],
            listStudent: [],
            listGradesubjectstudent: [],
          }
        },
        created(){
            axios.get('/list-gradesubjectstudent').then(response=>{
            this.listGradesubjectstudent = response.data
           })
          axios.get('/lists-subjects').then(response=>{
            this.listsSubjects = response.data
           })
          axios.get('/lists-grades').then(response=>{
            this.listsGrades = response.data
          })
         axios.get('/list-student').then(response=>{
        this.listStudent = response.data
         })
        },
        methods: {
          send(){
            
            if(this.gradesubjectstudent.student_id === ''){
              Swal.fire('Atención', 'Debe añadir un estudiante', 'warning')
              return false
            }
             if(this.gradesubjectstudent.subject_grade_id === ''){
              Swal.fire('Atención', 'Debe añadir la materia', 'warning')
              return false 
            }
            if(this.gradesubjectstudent.year === ''){
              Swal.fire('Atención', 'Debe digitar el año', 'warning')
              return false
            }
            axios.post('/store-gradesubjectstudent', this.gradesubjectstudent).then(response =>{
               this.gradesubjectstudent.student_id='',
              this.gradesubjectstudent.subject_grade_id='',
              this.gradesubjectstudent.year='',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'Se ha guardado con éxito.',
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