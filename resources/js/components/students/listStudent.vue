<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nacionalidad</th>
      <th scope="col">Cédula</th>
      <th scope="col">Nombre del encargado legal</th>
      <th scope="col">Número de telefono</th>
      <th scope="col">Estado socioeconomico</th>
      <th scope="col">Total per capita</th>
      <th scope="col">Clasificó</th>
      <th scope="col">Ingresos totales</th>
      <th scope="col">Acciónes</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(student, index) in listStudent" :key="student.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ student.name }}</th>
      <th>{{ student.nationality }}</th>
      <th>{{ student.card }}</th>
      <th>{{ student.legal_guardian_name }}</th>
      <th>{{ student.phone_number }}</th>
      <th v-if="student.socioeconomic_status === 'extreme_poverty'">Pobreza extrema</th>
       <th v-if="student.socioeconomic_status === 'poverty'">Pobreza</th>
        <th v-if="student.socioeconomic_status === 'vulnerability'">Vulberabilidad</th>
         <th v-if="student.socioeconomic_status === 'not_poor'">No pobre</th>
      <th>{{ student.total_per_capita }}</th>
      <th v-if="student.clasification === 1">Si</th>
      <th v-else>No</th>
      <th>{{ student.total_income }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(student.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listStudent',
    data(){
        return{
            listStudent: [],
        }
    },
    created() {
        axios.get('/list-student').then(response =>{
            this.listStudent =response.data
            console.log(this.listStudent)
        })
    },
    methods:{
      edit(id){
        return '/edit-student/' + id
      }
    }
}
</script>

