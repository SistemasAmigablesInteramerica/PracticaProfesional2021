<template>
<section id="contact" style="min-height: 125px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white;">
        <div class="container" >
      <div class="row">
        <div class="col-lg-9 col-md-9">  
          <div class="row" >
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 >Crear Roles</h2>
                  </div>  
                  <div class="col-lg-12">
                     <fieldset>
                     <label>Nombre de el rol: </label>
                       <input type="text" class="form-control" v-model="roles.name" placeholder="@Ejemplo: Administrador">
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
        name: "createRoles",
        components:{Swal},
        data() {
          return {
            roles: {
              name: '',
            }
          }
        },
        methods: {
          send(){

            if(this.roles.name === ''){
              Swal.fire('Atención', 'Debe digitar un rol', 'warning')
              return false
            }
            axios.post('/store-roles', this.roles).then(response =>{
                this.roles.name = '',
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
 