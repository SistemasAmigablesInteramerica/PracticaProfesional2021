<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 50%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Profesor</th>
       <th scope="col">Materia</th>
         <th scope="col">Curso Lectivo</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(subjectteacher, index) in listSubjectteacher" :key="subjectteacher.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ subjectteacher.teacher_id }}</th>
       <th>{{ subjectteacher.subject_grade_id  }}</th>
      <th>{{ subjectteacher.year }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(subjectteacher.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listSubjectteacher',
    data(){
        return{
            listSubjectteacher: [],
            listsSubjects: [],
        }
    },
    created() {
        axios.get('list-subjectteacher').then(response =>{
            this.listSubjectteacher = response.data
        })
         axios.get('lists-subjects').then(response =>{
            this.listsSubjects = response.data
        })
    },
       methods: {
      edit(id){
        return '/edit-subjectteacher/' + id
      }  
    },
}
</script> 