<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuarios</th>
      <th scope="col">Rol</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(userroles, index) in listUserRoles" :key="userroles.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ userroles.name }}</th>
      <th>
        <label v-for="roles of userroles.roles" :key="roles.id">{{roles.name}}</label>
      </th>
      <td><a class="btm btm-info btm-se" :href="edit(userroles.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listUserRoles',
    data(){
        return{
           listUserRoles:[],
        }
    },
    created() {
        axios.get('/list-userroles').then(response =>{
            this.listUserRoles =response.data
            console.log(this.listUserRoles)
            
        })
    },
    methods:{
      edit(id){
        return '/edit-userroles/' + id
      }
    }
}
</script>