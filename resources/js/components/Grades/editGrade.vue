<template>
    <section class="contact-us" id="contact">
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div class="row">
            <div class="col-lg-12">
              
                <div class="row" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;position: relative;left: 180px;">
                  <div class="col-lg-12" method="post" >
                    <h2>Editar Grado y Sección</h2>
                    </div>
                  <div class="col-lg-6">
                    <fieldset>
                    <label>Grados:</label>
                      <input class="form-control form-control-sm" v-model="grades.name">
                        </fieldset>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                     <label>Secciónes:</label>
                        <select class="form-control form-control-sm" v-model="grades.section" id="section">
                          <option></option>
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
                 <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" style="border-radius:20px;" id="form-submit" @click="send" class="btn btn-primary" >editar</button>
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
        props:[
            'data_grade'
        ],
        components:{Swal},
        data() {
          return {
            grades: {
              name: '',
              section: '',
            },
            idGrade:''
          }
        },
        created() {
          console.log('probando', this.data_grade)
            const grade = JSON.parse(this.data_grade)
          this.idGrade = grade.id 
          this.grades.name = this.grade.name
          this.grades.section = this.grade.section
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

            axios.put('/update-grade/'+ this.idGrade, this.grades).then(response =>{
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El grado se ha cambiado con éxito.',
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