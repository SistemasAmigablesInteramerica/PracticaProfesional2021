<template>
<div class="table-responsive-sm">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Grado</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(grade, index) in listsGrade" :key="grades.id">
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
    name: 'listsGrade',
    data(){
        return{
            listsGrades:[]
        }
    },
    created() {
        axios.get('/lists-grades').then(response =>{
            this.listStudent =response.data
            console.log(this.listsGrades)
        })
    }
}
</script>