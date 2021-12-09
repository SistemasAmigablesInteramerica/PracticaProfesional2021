<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 50%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Grados</th>
      <th scope="col">Materias</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(grades, index) in listSubjectgrade" :key="grades.id">
      <th sc ope="row">{{ index +1 }}</th>
      <th>{{grades.grades.name}}-{{grades.grades.section}}</th>
      <th>
        <label v-for="relation of listSubjectgrade" class= "label label-primary p-1">{{relation.subject.name}}, </label>
      </th>
      <td><a class="btm btm-info btm-se" :href="edit(grades.id)"><span class="fa fa-edit"></span></a></td>
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
        axios.get('/list-subjectgrade').then(response =>{
            this.listSubjectgrade = response.data
            console.log(this.subject)
        })
    },
       methods: {
      edit(id){
        return '/edit-subjectgrade/' + id
      }
    },
}
</script>
