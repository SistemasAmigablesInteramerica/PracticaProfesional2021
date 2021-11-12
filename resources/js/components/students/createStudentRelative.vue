<template>
        <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Agregar familiar de estudiante</h2>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                    
                      <input name="guardian_name" v-model="StudentRelative.guardian_name" type="text" id="guardian_name" placeholder="Nombre del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                    
                      <input name="guaridan_profession" v-model="StudentRelative.guaridan_profession" type="text" id="guaridan_profession" placeholder="Profesión del familiar">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <input name="guardian_card" v-model="StudentRelative.guardian_card" type="number" id="guardian_card"  placeholder="Cedula del familiar" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="guardian_relation" v-model="StudentRelative.guardian_relation" type="text" id="guardian_relation"  placeholder="Parentesco del familiar">
                    </fieldset>
                  </div>  
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="scholarship" v-model="StudentRelative.scholarship" type="text" id="scholarship"  placeholder="Escolaridad">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <br>
                  <label>Recibe ayuda financiera</label>
                  <input name="guardian_recieves_aid" v-model="StudentRelative.guardian_recieves_aid" type="checkbox" id="guardian_recieves_aid" value="first_checkbox" style="width:73%; height:73%; ">
                  </fieldset>
                </div>  
                  <div class="col-lg-4">
                  <fieldset>
                    <br>
                    <label for="guardian_aid_total">Monto de ayuda financiera:</label>
                    <input name="guardian_aid_total" v-model="StudentRelative.guardian_aid_total" type="number" id="guardian_aid_total"  placeholder="Monto de ayuda financiera" min="1">
                  </fieldset>
                  </div>
                  <div class="col-lg-12">
                  <fieldset>
                    <label for="guardian_salary">Salario:</label>
                    <input name="guardian_salary" v-model="StudentRelative.guardian_salary" type="number" id="guardian_salary"  placeholder="Salario" min="1">
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
    </div>
</div>
</template>

<script>
import Swal from 'sweetalert2'
export default {
    name: "createStudentrelative",
    components: {Swal},

    data() {
        return {
            StudentRelative: {
                guardian_name: '',
                guaridan_profession: '',
                guardian_card: '',
                guardian_relation: '',
                scholarship: '',
                guardian_recieves_aid: '',
                guardian_aid_total: '',
                guardian_salary: ''
            }
        }
    },
    methods:{
        send() {
            axios.post('/store.studentRelative', this.StudentRelative).then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El familiar se ha registrado con exito'
                });
            }).catch(error =>{
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha producido un error'
                });
            })
        }
    }
}
</script>