<template>
      <section class="contact-us" id="contact">
         <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row" >
            <div class="col-lg-12">
                <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
                  <div class="col-lg-12">
                    <h2>Asignar grado,materia y estudiante</h2>
                    </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <select  class="form-select" v-model="gradesubjectstudent.student_id">
                      <option disabled value="">ID del estudiante</option>
                        <option></option> 
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                     <select class="form-select" v-model="gradesubjectstudent.subject_grade_id">
                        <option disabled value="">Escoger materia</option>
                       <option v-for="subject in listsSubjects" :value="subject.id" key="subject_id" >{{subject.name}}</option>
                      </select> 
                    </fieldset>
                 </div>
                 <div class="col-lg-4">
                  <fieldset>
                    <input type="text" v-model="gradesubjectstudent.year" placeholder="Año">
                    </fieldset>
                    </div>
                 <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary" >Enviar</button>
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
        props:[
          'data_gradesubjectstudent'
        ],
        components:{Swal},
        data() {
          return {
            gradesubjectstudent: {
              subject_grade_id: '',
              student_id: '',
              year: '',
            },
            idGradeSubjectStudent:'',
             listsGrades: [],
            listsSubjects: [],
            listStudent: [],
          }
        },
        created(){
           const Gradesubjectstudent = JSON.parse(this.data_Gradesubjectstudent)
        this.idGradesubjectstudent = Gradesubjectstudent.id
        this.gradesubjectstudents.student_id = gradesubjectstudent.student_id
        this.gradesubjectstudents.subject_grade_id = gradesubjectstudent.subject_grade_id
        this.gradesubjectstudents.year = gradesubjectstudent.year

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
            axios.post('/update-gradesubjectstudent' + this.idGradeSubjectStudent, this.gradesubjectstudent).then(response =>{
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