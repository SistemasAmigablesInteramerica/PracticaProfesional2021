<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Entrada</th>
      <th scope="col">Salida</th>
      <th scope="col">Estudiante</th>
      <th scope="col">Docente</th>
      <th scope="col">Acciónes</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(attendancehistory, index) in listAttendancehistory" :key="attendancehistory.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ attendancehistory.check_in }}</th>
      <th>{{ attendancehistory.check_out }}</th>
      <th>
      <label class="label label-primary p-1">{{attendancehistory.student.name}}</label>
      </th>
      <th>{{ attendancehistory.teacher.names }}</th>
     <td><a v-if="!attendancehistory.check_out" class="btn btn-danger btn-se" @click="CheckOut(attendancehistory.id)"><span class="fa fa-sign-out"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
import Swal from 'sweetalert2'
export default {
    name: 'listAttendancehistory',
    components: {Swal},
    data(){
        return{
            listAttendancehistory: [],
            Hours: '',
            Attendance: [],
        }

    },

    created(){
        axios.get('/list-attendanceHistory').then(response=>{
            this.listAttendancehistory = response.data
        })
    },

    methods:{

      CheckOut(id)
      {
        axios.get('/check-attendancehistory/' + id).then(response=>{
          this.listAttendancehistory = response.data
            }).catch(error=>{
                Swal.fire({
                    icon: 'error',
                    text: 'Prueba',
                    title: 'Error'
                })

            });

      },

    }
}
</script>
