<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cédula</th>
      <th scope="col">Fecha de nacimiento</th>  
      <th scope="col">Edad</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Correo eletornico</th>
      <th scope="col">Genero</th>
      <th scope="col">Numero de telefono</th>
      <th scope="col">Acción</th>

    </tr>
  </thead>
  <tbody>
    <tr v-for="(teacher, index) in listteacher" :key="teacher.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ teacher.names }}</th>
      <th>{{ teacher.last_names }}</th>
      <th>{{ teacher.identification }}</th>
      <th>{{ teacher.birthdate }}</th>
      <th>{{ teacher.age }}</th>
      <th>{{ teacher.speciality }}</th>
      <th>{{ teacher.email }}</th>
      <th>{{ teacher.gender }}</th>
      <th>{{ teacher.contact_number }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(teacher.id)"><span class="fa fa-edit"></span></a></td>
     
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listTeacher',
    data(){
        return{
            listteacher:[]
        }
    },

    created(){
        axios.get('list-teacher').then(response=>{
            this.listteacher = response.data
        })
    },
    methods:{
      edit(id){
        return "/edit-teacher/" + id
      }
    }
    
}
</script>