<template>
<section id="contact" style="min-height: 125px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white;margin-top:100px;">
        <div class="container" >
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 >Asignar roles y permisos</h2>
                  </div>
                  <div class="col-lg-12">
                   <label>Asignar rol:</label>
                       <select class="form-control form-control-sm" @change="searchPermssions(permissionsRoles.role_id)" v-model="permissionsRoles.role_id">
                       <option disabled value="">Seleccionar un rol</option>
                       <option v-for="roles in listRoles" :value="roles.id" :key="roles.id">{{ roles.name }}</option>
                       </select>
                  </div>
                   <div class="col-lg-12">
                     <label>Asignar permiso:</label>
                       <v-select taggable multiple v-model="permissionsRoles.permissions" placeholder="Seleccionar permisos" :reduce="listPermission => listPermission.value" :options="this.listPermission"> </v-select>
                    </div>

                   <div class="col-lg-12" style="padding-top:60px;text-align: center" >
                    <fieldset>
                      <button type="submit" @click="send" class="btn btn-primary">Asignar</button>
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
import 'vue-select/dist/vue-select.css'
  import Swal from 'sweetalert2'
  import vSelect from 'vue-select'

    export default {
        name: "createPermissionsRoles",
        components:{Swal, vSelect},
        data() {
          return {
            listPermission:[],
            listRoles: [],
            permissionsRoles: {
              role_id: '',
              permissions: [],
            },
          }
        },
            created() {
        axios.get('/list-roles').then(response =>{
            this.listRoles = response.data
        }),
          axios.get('/list-permissions').then(response =>{
            this.listPermission = response.data
        })
    },
        methods: {
          searchPermssions(id){
            axios.get('/select-role/'+id).then(response =>{
              const permisssions = response.data.permissions
              if(permisssions.length > 0){
              permisssions.forEach(permissions=>{
                this.permissionsRoles.permissions.push(permissions.id)
              })
              }else{
                this.permissionsRoles.permissions=[]
              }

            })
          },
          send(){

            if(this.permissionsRoles.role_id === ''){
              Swal.fire('Atención', 'Debe asignar un rol', 'warning')
              return false
            }
            if(this.permissionsRoles.permission_id === ''){
              Swal.fire('Atención', 'Debe asignar un permiso ', 'warning')
              return false
            }
            axios.post('/store-permissionsroles', this.permissionsRoles).then(response =>{
                this.permissionsRoles.role_id = '',
                this.permissionsRoles.permission_id = '',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El permiso se ha asignado con éxito.',
                });
            }).catch(error => {
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha encontrado un error pero se guarda igualmente',
                    });

            })

          }
        }
    }

</script>

<style scoped>
  .tag-input {
    width: 100%;
    border: 1px solid #eee;
    font-size: 0.9em;
    height: 50px;
    box-sizing: border-box;
    padding: 0 10px;
  }

  .tag-input__tag {
    height: 30px;
    float: left;
    margin-right: 10px;
    background-color: #eee;
    margin-top: 10px;
    line-height: 30px;
    padding: 0 5px;
    border-radius: 5px;
  }

  .tag-input__tag > span {
    cursor: pointer;
    opacity: 0.75;
  }

  .tag-input__text {
    border: none;
    outline: none;
    font-size: 0.9em;
    line-height: 50px;
    background: none;
  }
</style>
