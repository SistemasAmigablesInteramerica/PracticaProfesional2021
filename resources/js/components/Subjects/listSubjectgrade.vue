<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 50%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Materias</th>
       <th scope="col">Grados</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(subjectgrade, index) in listSubjectgrade" :key="subjectgrade.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ subjectgrade.subject_id }}</th>
      <th>{{ subjectgrade.grade_id }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(subjectgrade.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listSubjectgrade',
    data(){
        return{
            listSubjectgrade: [],
        }
    },
    created() {
        axios.get('list-subjectgrade').then(response =>{
            this.listSubjectgrade = response.data
        })
    },
       methods: {
      edit(id){
        return '/edit-subjectgrade/' + id
      }  
    },
}
</script> 