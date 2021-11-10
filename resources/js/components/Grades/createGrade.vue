<template>
    
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row">
            <div class="col-lg-12">
             
                <div class="row" style="min-height: 550px; border-radius:10px;width: 100%;border: 10px solid white;">
                  <div class="col-lg-12" method="post" >
                    <h2>Agregar nueva sección</h2>
                    </div>
                  <div class="col-lg-6"style=" ">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Grado" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                  <fieldset>
                    <select class="form-control" v-model="grade.section">
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
                      <button type="submit" id="form-submit" class="button">Enviar</button>
                    </fieldset>
                  </div>
                </div>
              
            </div>
          </div>
        </div>

</template>

<script>
    export default {
        name: "createGrade",
        data() {
          return {
            grade: {
              name: '',
              section: ''
            }
          }
        },
        methods: {
          send(){
            axios.post('/store-grade',this.grade).then(response =>{
              swal.fire('Excelente', 'Se ha guardado con exito', 'Success');
            }).catch(error=>{

            })
          }
        },
    }

</script>
