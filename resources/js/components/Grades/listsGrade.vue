<template>
<div class="table-responsive-sm">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Grado</th>
      <th scope="col">Sección</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(grades, index) in listsGrades" :key="grades.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ grades.name }}</th>
      <th>{{ grades.section }}</th>
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
            this.listsGrades =response.data
            console.log(this.listsGrades)
        })
    }
}
</script>