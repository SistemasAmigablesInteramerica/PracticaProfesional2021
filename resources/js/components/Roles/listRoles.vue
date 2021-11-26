<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Roles</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(roles, index) in listRoles" :key="roles.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ roles.name }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(roles.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listRoles',
    data(){
        return{
            listRoles: [],
        }
    },
    created() {
        axios.get('/list-roles').then(response =>{
            this.listRoles =response.data
            console.log(this.listRoles)
        })
    },
    methods:{
      edit(id){
        return '/edit-roles/' + id
      }
    }
}
</script>