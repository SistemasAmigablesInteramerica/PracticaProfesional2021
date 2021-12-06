<template>
<section id="contact" style="min-height: 125px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white;">
        <div class="container" >
      <div class="row">
        <div class="col-lg-9 col-md-9">  
          <div class="row" >
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 >Actualizar Roles</h2>
                  </div>  
                  <div class="col-lg-12">
                     <fieldset>
                     <label>Nombre de el rol: </label>
                       <input type="text" class="form-control" v-model="roles.name" placeholder="@Ejemplo: Administrador">
                     </fieldset>
                   </div>
                   <div class="col-lg-12" style="text-align: center" >
                    <fieldset>
                      <button type="submit" @click="send" class="btn btn-primary">Editar</button>
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
        name: "editRoles",
        components:{Swal},
        props:['data_roles'],
        data() {
          return {
            roles: {
              name: '',
            },
            idRoles:'',
          }
        },
        created(){
         const Role = JSON.parse(this.data_roles)
         this.idRoles = Role.id
         this.roles.name = Role.name
        },
        methods: {
          send(){

            if(this.roles.name === ''){
              Swal.fire('Atención', 'Debe digitar un rol', 'warning')
              return false
            }
            axios.put('/update-roles/' + this.idRoles, this.roles).then(response =>{
                this.roles.name = '',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos actualizados',
                    text: 'El rol se ha actualizado con éxito.',
                });
                  window.location.href = '/lista-de-roles'
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
 