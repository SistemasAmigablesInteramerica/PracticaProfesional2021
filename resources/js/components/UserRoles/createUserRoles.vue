<template>
<section id="contact" style="min-height: 125px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white;">
        <div class="container" >
      <div class="row">
        <div class="col-lg-9 col-md-9">  
          <div class="row" >
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 >Asignar roles y usuarios</h2>
                  </div>  
                    <div class="col-lg-12">
                     <fieldset>
                     <label>Usuario:</label>
                       <select type="text" class="form-control form-control-sm" v-model="UserRoles.user_id">
                       <option disabled value="">Seleccionar usuario</option>
                       <option v-for="user in listUser" :value="user.id" :key="user.id">{{ user.name }}</option>
                       </select>
                     </fieldset>
                   </div>
                  <div class="col-lg-12">
                     <fieldset>
                     <label>Nombre de el rol: </label>
                       <select type="text" class="form-control form-control-sm" v-model="UserRoles.role_id">
                       <option disabled value="">Seleccionar un rol</option>
                        <option v-for="roles in listRoles" :value="roles.id" :key="roles.id">{{ roles.name }}</option>
                       </select>
                     </fieldset>
                   </div>
                   <div class="col-lg-12" style="text-align: center" >
                    <fieldset>
                      <button type="submit" @click="send" class="btn btn-primary">Registrar</button>
                    </fieldset>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
</template>

<script>
  import Swal from 'sweetalert2'
    export default {
        name: "createUserRoles",
        components:{Swal},
        data() {
          return {
              listUserRoles:[],
              listUser:[],
              listRoles:[],
            UserRoles: {
              role_id:'',
              user_id:'',
            }
          }
        },
        created() {
        axios.get('/list-roles').then(response =>{
            this.listRoles = response.data
        }),
           axios.get('/list-user').then(response =>{
            this.listUser = response.data
        })
    },
        methods: {
          send(){

            if(this.UserRoles.role_id=== ''){
              Swal.fire('Atención', 'Debe digitar un rol', 'warning')
              return false
            }
            if(this.UserRoles.user_id === ''){
              Swal.fire('Atención', 'Debe digitar un rol', 'warning')
              return false
            }
            axios.post('/store-userroles', this.userroles).then(response =>{
                this.userroles.role_id = '',
                this.userroles.user_id = '',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El rol se ha registrado con éxito.',
                });
            }).catch(error => {
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha encontrado un error.',
                    });

            })
          }
        }
    }

</script>  
 