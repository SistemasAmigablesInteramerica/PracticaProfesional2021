<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(user, index) in listUser" :key="user.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ user.name }}</th>
      <th>{{ user.email }}</th>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listUser',
    data(){
        return{
            listUser:[],
        }
    },
    created() {
        axios.get('/list-user').then(response =>{
            this.listUser = response.data
            console.log(this.listUsers)
        })
    },
    methods: {
      edit(id){
        return '/edit-user/' + id
      }
    },
}
</script> 