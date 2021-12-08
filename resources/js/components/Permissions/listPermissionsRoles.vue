<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Roles</th>
      <th scope="col">Permisos</th>
      <th scope="col">Acciónes</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(permissionsroles, index) in listRoles" :key="permissionsroles.role_id">
      <th scope="row">{{ index + 1 }}</th>
      <th>{{ permissionsroles.name }}</th>
        <th>
            <label class="label label-success p-1" v-for="permissions of permissionsroles.permissions">{{ permissions.title }}, </label>
        </th>
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
