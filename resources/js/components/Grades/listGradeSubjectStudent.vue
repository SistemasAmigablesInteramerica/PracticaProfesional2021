<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Curso Lectivo</th>
      <th scope="col">Materia</th>
      <th scope="col">ID del Estudiante</th>
      <th scope="col">Acciónes</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(gradesubjectstudent, index) in listGradesubjectstudent" :key="gradesubjectstudent.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ gradesubjectstudent.year }}</th>
      <th>{{ gradesubjectstudent.subject_grade_id }}</th>
      <th>{{ gradesubjectstudent.student_id}}</th>
      <td><a class="btm btm-info btm-se" :href="edit(gradesubjectstudent.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>
 
<script>
export default {
    name: 'listGradeSubjectStudent',
    data(){
        return{
            listGradesubjectstudent: [],
        }
    },
    created() {
        axios.get('list-gradesubjectstudent').then(response =>{
            this.listGradesubjectstudent = response.data
           
        })
    },
    methods: {
      edit(id){
        return '/edit-gradesubjectstudent/' + id
      }
    },
}
</script> 