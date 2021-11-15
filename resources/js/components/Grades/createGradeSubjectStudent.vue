<template>

         <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row">
            <div class="col-lg-12">
              
                <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
                  <div class="col-lg-12" method="post" >
                    <h2>Agregar nueva sección</h2>
                    </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="name" type="text" id="name" v-model="grades.name" placeholder="Grado" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <select class="form-control" v-model="grades.section">
                      <option Value="1">1</option>
                      <option Value="2">2</option>
                      <option Value="3">3</option>
                      <option Value="4">4</option>
                      <option Value="5">5</option>
                      <option Value="6">6</option>
                      </select>
                    </fieldset>
                 </div>
                 <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary" >Enviar</button>
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
        name: "createGradeSubjectStudent",
        components:{Swal},
        data() {
          return {
            grades: {
              name: '',
              section: '',
            }
          }
        },
        methods: {
          send(){
            axios.post('/store-gradesubjectstudent', this.gradesubjectstudent).then(response =>{
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