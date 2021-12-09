<template>
    <section class="contact-us" id="contact">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white; margin-top:100px;">
                  <div class="col-lg-12 col-md-12 col-sm-12" method="post" >
                    <h2>Agregar nueva sección</h2>
                    </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>
                    <label>Grados:</label>
                      <select class="form-control form-control-sm" v-model="grades.name">
                          <option disabled value="">Seleccione una grado</option>
                          <option value="7">7°</option>
                          <option value="8">8°</option>
                          <option value="9">9°</option>
                          <option value="10">10°</option>
                          <option value="11">11°</option>
                          <option value="12">12°</option>
                      </select>
                        </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>
                     <label>Secciónes:</label>
                        <select class="form-control form-control-sm" v-model="grades.section" id="section">
                          <option disabled value="">Seleccione una sección</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                        </select>
                        </fieldset>
                      </div>
                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset style="text-align:center; padding-top:35px;">
                      <button type="submit" id="form-submit" @click="send" class="btn btn-primary" >Agregar</button>
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
        name: "createGrade",
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

            if(this.grades.name === ''){
              Swal.fire('Atención', 'Debe digitar un grado', 'warning')
              return false
            }
            if(this.grades.section === ''){
              Swal.fire('Atención', 'Debe digitar una sección', 'warning')
              return false
            }

            axios.post('/store-grade', this.grades).then(response =>{
              this.grades.name = '',
              this.grades.section = '',
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El grado se ha registrado con éxito.',
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
