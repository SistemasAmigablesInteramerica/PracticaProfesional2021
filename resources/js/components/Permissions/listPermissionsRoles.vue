<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Roles</th>
      <th scope="col">Permisos</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(permissionsroles, index) in listPermissionroles" :key="permissionsroles.role_id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ permissionsroles.role_id }}</th>
      <th>{{ permissionsroles.permission_id }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(permissionsroles.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listPermissionroles',
    data(){
        return{
            listPermissionroles:[],
            listRoles: [],
        }
    },
    created() {
        axios.get('list-permissionsroles').then(response =>{
            this.listPermissionroles = response.data
        })
         axios.get('/list-roles').then(response =>{
            this.listRoles =response.data
            console.log(this.listRoles)
        })
    },
    methods: {
      edit(id){
        return '/edit-permissionsroles/' + id
      }
    },
}
</script> 