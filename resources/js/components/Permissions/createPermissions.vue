<template>
<section id="contact" style="min-height: 125px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white; margin-top:100px;">
        <div class="container" >
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">  
          <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 >Crear permisos</h2>
                  </div>  
                  <div class="col-lg-12 col-md-12 col-sm-12">
                   <fieldset>
                   <label>Nombre de el permiso: </label>
                       <input type="text" class="form-control form-control-sm" v-model="permissions.title" placeholder="@Ejemplo: edit_form">
                     </fieldset>
                       </div>
                   <div class="col-lg-12 col-md-12 col-sm-12">
                     <fieldset>
                     <label>Descripción:</label>
                       <input type="text" class="form-control" v-model="permissions.description" placeholder="Descripción">
                     </fieldset>
                         </div>
                   <div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;padding-top:60px;" >
                    <fieldset>
                      <button type="submit" @click="send" class="btn btn-primary">Agregar</button> 
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
        name: "createPermissions",
        components:{Swal},
        data() {
          return {
            permissions: {
              title: '',
              description: '',
            },
          }
        },
        methods: {
          send(){

            if(this.permissions.title === ''){
              Swal.fire('Atención', 'Debe digitar un titulo', 'warning')
              return false
            }
            if(this.permissions.description === ''){
              Swal.fire('Atención', 'Debe digitar una descripcion ', 'warning')
              return false
            }
            axios.post('/store-permissions', this.permissions).then(response =>{
                this.permissions.title = '',
                 this.permissions.description = '',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El permiso se ha registrado con éxito.',
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