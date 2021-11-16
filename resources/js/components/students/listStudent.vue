<template>
<div class="table-responsive-sm">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nacionalidad</th>
      <th scope="col">Cédula</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Constancia salarial</th>
      <th scope="col">Nombre del encargado legal</th>
      <th scope="col">Cédula del encargado legal</th>
      <th scope="col">Luga de residencia</th>
      <th scope="col">Número de telefono</th>
      <th scope="col">Estado socioeconomico</th>
      <th scope="col">Ingreso total de familia</th>
      <th scope="col">Total de miembros en la familia</th>
      <th scope="col">Total per capita</th>
      <th scope="col">Clasificó</th>
      <th scope="col">Asistencia financiera</th>
      <th scope="col">Asistencia voluntaria</th>
      <th scope="col">Ingreso de renta</th>
      <th scope="col">Otros ingresos</th>
      <th scope="col">Ingresos totales</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(student, index) in listStudent" :key="student.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ student.name }}</th>
      <th>{{ student.nationality }}</th>
      <th>{{ student.card }}</th>
      <th>{{ student.birthdate }}</th>
      <th>aun no se como guardar archivos</th>
      <th>{{ student.legal_guardian_name }}</th>
      <th>{{ student.legal_guardian_card }}</th>
      <th>{{ student.place_residence }}</th>
      <th>{{ student.phone_number }}</th>
      <th>{{ student.socioeconomic_status }}</th>
      <th>{{ student.total_income_family }}</th>
      <th>{{ student.family_member_total }}</th>
      <th>{{ student.total_per_capita }}</th>
      <th>{{ student.clasification }}</th>
      <th>{{ student.financial_assistance }}</th>
      <th>{{ student.voluntary_assistance }}</th>
      <th>{{ student.rental_income }}</th>
      <th>{{ student.others_income }}</th>
      <th>{{ student.total_income }}</th>
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
            listStudent:[]
        }
    },
    created() {
        axios.get('/list-student').then(response =>{
            this.listStudent =response.data
            console.log(this.listStudent)
        })
    }
}
</script>