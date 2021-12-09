<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Entrada</th>
      <th scope="col">Salida</th>
      <th scope="col">Estudiante</th>  
      <th scope="col">Materia</th>
      <th scope="col">Asistió</th>
      <th scope="col">Acciónes</th> 
    </tr>
  </thead>
  <tbody>
    <tr v-for="(attendancehistory, index) in listAttendancehistory" :key="attendancehistory.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ attendancehistory.check_in }}</th>
      <th>{{ attendancehistory.check_out }}</th>
      <th>{{ attendancehistory.student_id }}</th>
      <th>{{ attendancehistory.subject_teacher_id }}</th>
      <th v-if="attendancehistory.attended === 1">Atendio</th>
      <th v-else>No Atendio</th>
      <td><a class="btm btm-info btm-se" :href="edit(attendancehistory.id)"><span class="fa fa-edit"></span></a></td> 
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
    },
    methods:{
      edit(id){
        return '/edit-attendancehistory/' + id
      }
    }
}
</script>