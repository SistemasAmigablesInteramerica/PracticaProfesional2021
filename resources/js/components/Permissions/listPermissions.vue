<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Permiso</th>
      <th scope="col">Descripción</th>
      <th scope="col">Acciónes</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(permissions, index) in listPermissions" :key="permissions.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ permissions.title }}</th>
      <th>{{ permissions.description }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(permissions.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
//Las descriciones no son aceptadas
export default {
    name: 'listPermission',
    data(){
        return{
            listPermissions:[],

        }
    },
    created() {
        axios.get('/list-permissions').then(response =>{
            this.listPermissions = response.data
            console.log(this.listPermissions)
        })
          axios.get('/list-permission').then(response =>{
            this.listPermissions = response.data
            console.log(this.listPermissions)
        })
    },
    methods: {
      edit(id){
        return '/edit-permissions/' + id
      }
    },
}
</script>
