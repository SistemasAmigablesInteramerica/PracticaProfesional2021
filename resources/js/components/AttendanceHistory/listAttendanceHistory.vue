<template>
<div class="table-responsive-sm">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Entrada</th>
      <th scope="col">Salida</th>
      <th scope="col">Estudiante</th>  
      <th scope="col">Materia</th>
      <th scope="col">Asistió</th>


    </tr>
  </thead>
  <tbody>
    <tr v-for="(attendancehistory, index) in listAttendancehistory" :key="attendancehistory.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ attendancehistory.names }}</th>
      <th>{{ attendancehistory.check_in }}</th>
      <th>{{ attendancehistory.check_out }}</th>
      <th>{{ attendancehistory.student_id }}</th>
      <th>{{ attendancehistory.grade_subject_teacher_id }}</th>
      <th>{{ attendancehistory.attendancehistory }}</th>
      <th v-if="attendancehistory.attended === 1">Atendio</th>
      <th v-else>No Atendio</th>

     
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listAttendancehistory',
    data(){
        return{
            listAttendancehistory: [],
        }
    },
    created(){
        axios.get('list-attendanceHistory').then(response=>{
            this.listAttendancehistory = response.data
        })
    }
}
</script>