<template>
<section id="contact" style="min-height: 125px; border-radius: 20px;width: 65%;border: 10px solid white; background-color: white;">
        <div class="container" >
      <div class="row">
        <div class="col-lg-9 col-md-9">  
          <div class="row" >
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 >Crear permisos</h2>
                  </div>  
                  <label>Nombre del permiso:</label>
                  <div class="tag-input col-lg-12">
                    <div v-for="(tag, index) in tags" v-model="permissions.title" :key='tag' class="tag-input__tag form-control form-control-sm" >
                      <span>x</span>
                      {{ tag }}
                    </div>
                    <input type="text" placeholder="@Eliminar" v-model="permissions.title" class="tag-input__text" @keydown.enter='addTag' @keydown.188='addTag' @keydown.delete="removeLastTag"/>
                  </div>
                   <div class="col-lg-12">
                     <fieldset>
                     <label>Descripción:</label>
                       <input type="text" class="form-control" v-model="permissions.description">
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
        name: "createPermissions",
        components:{Swal},
        data() {
          return {
            tags: [],
            permissions: {
              title: '',
              description: '',
            },
          }
        },
        methods: {
  addTag (event) {
      if (event.code == 'Comma' || event.code == 'Enter'){
        event.preventDefault()
        var val = event.target.value.trim()

        if (val.length > 0) {
          this.tags.push(val)
          event.target.value = ''
        }
      }
  },
  removeTag (index){
    this.tags.splice(index,  1)
    },
    removeLastTag (event) {
          if (event.target.value.length === 0){
            this.removeTag(this.tags.length - 1)
    }
  },
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

