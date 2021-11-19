<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Id del estudiante</th>
      <th scope="col">Nombre del familiar</th>
      <th scope="col">Profesion del familar</th>
      <th scope="col">Cédula del familiar</th>
      <th scope="col">Relación familiar</th>
      <th scope="col">Escolaridad</th>
      <th scope="col">Recibe ayuda financiera</th>
      <th scope="col">Total de ayuda financiera</th>
      <th scope="col">Salario del familiar</th>

    </tr>
  </thead>
  <tbody>
    <tr v-for="(StudentRelative, index) in listStudentrelative" :key="StudentRelative.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ StudentRelative.student_id }}</th>
      <th>{{ StudentRelative.guardian_name }}</th>
      <th>{{ StudentRelative.guaridan_profession }}</th>
      <th>{{ StudentRelative.guardian_card }}</th>
      <th>{{ StudentRelative.guardian_relation }}</th>
      <th>{{ StudentRelative.scholarship }}</th>
      <th>{{ StudentRelative.guardian_receives_aid }}</th>
      <th>{{ StudentRelative.guardian_aid_total }}</th>
      <th>{{ StudentRelative.guardian_salary }}</th>
     
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name:'listStudentrelative',
    data(){
        return{
            listStudentrelative:[]
        }
    },
    created(){
        axios.get('/list-studentRelative').then(response =>{
            this.listStudentrelative = response.data
            console.log(this.listStudentrelative)
        })
    }
    
}
</script>