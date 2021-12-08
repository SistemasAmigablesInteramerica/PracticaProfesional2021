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
                      <label>Materias: <input class="form-control-sm" type="text" v-model="subjects.name"></label>
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
        props:[
            'data_subject'
        ],
        components:{Swal},
        data() {
          return {
            subjects: {
              name: '',
            },
          idSuject:''
          }
        },
        created() {
           const subject = JSON.parse(this.data_subject)
           this.idSubject = subject.id
           this.subjects.name = subject.name 
        },
        methods: {
          send(){
            if(this.subjects.name === ''){
              Swal.fire('Atención', 'Debe digitar una materia', 'warning')
              return false
            }
            axios.put('/update-subject/'+ this.idSubject, this.subjects).then(response =>{
              Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'La materia se ha cambiado con éxito.',
                });
                 window.location.href = '/lista-de-materias'
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