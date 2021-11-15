<template>

    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
                <div class="col-lg-12">
                 <h2>Agregar Materias</h2>
                 </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="name" type="text" v-model="subjects.name" id="name" placeholder="Materias" required="">
                    </fieldset>
                  </div>
                   <div class="col-lg-12">
                     <fieldset>
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary">Agregar</button>
                     </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
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
            axios.post('/store-subject', this.subjects).then(response =>{
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El estudiante se ha registrado con exito.',
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