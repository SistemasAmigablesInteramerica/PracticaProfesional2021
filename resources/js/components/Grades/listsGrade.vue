<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Grado</th>
      <th scope="col">Sección</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(grades, index) in listsGrades" :key="grades.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ grades.name }}°</th>
      <th>{{ grades.section }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(grades.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listsGrades',
    data(){
        return{
            listsGrades:[]
        }
    },
    created() {
        axios.get('lists-grades').then(response =>{
            this.listsGrades = response.data
            console.log(this.listsGrades)
        })
    },
    methods: {
      edit(id){
        return '/edit-grade/' + id
      }
    },
}
</script> 