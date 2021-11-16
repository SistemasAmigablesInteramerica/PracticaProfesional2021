<template>
<div class="table-responsive-sm">
    <table class="table table-light table-sm">
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
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
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