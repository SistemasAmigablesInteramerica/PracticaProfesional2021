 <template>
<section id="contact" style="min-height: 125px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white;">
        <div class="container" >
      <div class="row">
        <div class="col-lg-9 col-md-9">  
          <div class="row" >
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 >Asignar roles y permisos</h2>
                  </div>  
                  <div class="col-lg-12">
                   <label>Asignar rol:</label>
                       <select class="form-control form-control-sm" v-model="permissionsroles.role_id">
                       <option disabled value="">Seleccionar un rol</option>
                       <option v-for="roles in listRoles" :value="roles.id" :key="roles.id">{{ roles.name }}</option>
                       </select>
                  </div>   
                   <div class="col-lg-12">
                     <label>Asignar permiso:</label>
                       <v-select taggable multiple v-model="permissionsroles.permission_id" placeholder="Seleccionar permisos" :reduce="listPermission => listPermission.value" :options="listPermission"> </v-select>                       
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
        name: "editPermissionsRoles",
        components:{Swal, vSelect},
        props:['data_permissionsroles'],
        data() {
          return {
            listPermission:[],
            listRoles: [],
            listPermissionsRoles:[],
            permissionsroles: {
              role_id: '',
              permission_id: [],
            },
            idPermissionsroles:'',
          }
        }, 
            created() {
                const permissionsroles = JSON.parse(this.data_permissionsroles)
                this.idPermissionsroles = permissionsroles.id
                this.permissionsroles.role_id = permissionsroles.role_id 
                this.permissionsroles.permission_id = permissionsroles.permission_id

        axios.get('/list-roles').then(response =>{
            this.listRoles = response.data
              console.log(this.listRoles) 
        }),
          axios.get('/list-permissions').then(response =>{
            this.listPermission = response.data
        })
    },
        methods: {

          send(){

            if(this.permissionsroles.role_id === ''){
              Swal.fire('Atención', 'Debe asignar un rol', 'warning')
              return false
            }
            if(this.permissionsroles.permission_id === ''){
              Swal.fire('Atención', 'Debe asignar un permiso ', 'warning')
              return false
            }
            axios.put('/update-permissionsroles/'+ this.idPermissionsroles, this.permissionsroles).then(response =>{
                this.permissionsroles.role_id = '',
                this.permissionsroles.permission_id = '',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El permiso se ha asignado con éxito.',
                });
                 window.location.href = '/lista-de-rolesypermisos '
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