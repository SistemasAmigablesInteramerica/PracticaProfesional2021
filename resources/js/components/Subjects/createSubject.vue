<template>
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9">
          <div class="row" style="min-height: 300px; border-radius: 20px;width: 100%;border: 20px solid white; background-color: white;relative;left: 180px;margin-top:100px;">
                <div class="col-lg-12 col-md-12 col-sm-12">
                 <h2>Agregar Materias</h2>
                 </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>  
                      <label>Materias: <input class="form-control-sm" type="text" v-model="subjects.name"  placeholder="@Ejemplo: Ciencias"></label>
                    </fieldset>
                  </div>
                   <div class="col-lg-12 col-md-12 col-sm-12">
                     <fieldset style="text-align:center; padding-top:35px;">
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary">Agregar</button>
                     </fieldset>
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
        name: "createSubject",
        components:{Swal},
        data() {
          return {
            subjects: {
              name: '',
            }
          
          }
        },
        methods: {
          send(){
            if(this.subjects.name === ''){
              Swal.fire('Atención', 'Debe digitar una materia', 'warning')
              return false
            }
            axios.post('/store-subject', this.subjects).then(response =>{
                this.subjects.name = ''
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'La materia se ha registrado con éxito.',
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
