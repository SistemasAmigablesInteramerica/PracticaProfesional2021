<template>
<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Expediente Del Beneficiario Del Comedor Estudiantil</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Nombre completo:</label>
                      <input name="name" class="form-control" v-model="student.name" type="text" placeholder="Nombre Completo Del Estudiante">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <label>Nacionalidad:</label>
                    <input name="nationality" class="form-control" v-model="student.nationality" type="text" placeholder="Nacionalidad" >
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Número de Cédula</label>
                      <input name="card" class="form-control" v-model="student.card" type="number" placeholder="Numero de Cédula">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <label for="Birthdate">Fecha de Nacimiento:</label>
                   <input name="birthdate" class="form-control" v-model="student.birthdate" type="date" placeholder="Fecha de Nacimiento">  
                  </fieldset>
                  </div>  
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="legal_guardian_name">Nombre del Encargado Legal:</label>
                      <input name="legal_guardian_name" class="form-control" v-model="student.legal_guardian_name" type="text" placeholder="Inserte el Nombre">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="legal_guardian_card">Cédula del encargado legal:</label>
                      <input name="legal_guardian_card" class="form-control" v-model="student.legal_guardian_card" type="number" placeholder="No.Cédula del encargado legal" pattern="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                  <label for="phone_number">Telefono de domicilio:</label>
                    <input type="tel" class="form-control" v-model="student.phone_number" name="phone_number" placeholder="2777-0000">  
                    </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                      <label>Domicilio:</label>
                      <input name="place_residence" class="form-control" v-model="student.place_residence" type="text" placeholder="Direccion Del Domicilio">
                      </fieldset>
                  </div>
                  <!-- <div class="col-lg-12">
                    <fieldset>
                  <label for="archivo">Subir La Constancia Salarial:</label>
                    <input type="file" v-on:change="student.salarial_constance" class="form-control" name="archivo" accept="image/*,.txt,.doc,.docx,.document,.pdf">
                    </fieldset>
                  </div> -->
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Ingresos familiares:</label>
                    <input name="total_income_family" class="form-control" v-model="student.total_income_family" type="text"  placeholder="₡ Total De Ingresos">
                    </fieldset> 
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Total de miembros familiares:</label>
                    <input name="family_member_total" class="form-control" v-model="student.family_member_total" type="text" placeholder="/ Numero de Miembros Familiares =">
                    </fieldset> 
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label>Total per capita:</label>
                    <input name="total_per_capita" class="form-control" v-model="student.total_per_capita" type="text" placeholder=" ₡ = Per Cápita">
                    </fieldset> 
                  </div>
                  <div class="col-lg-12">
                    <label for="socioeconomic_status">Estado Socioeconomico:</label>
                    <select name="socioeconomic_status" class="form-control" v-model="student.socioeconomic_status">
                      <option disabled value=""> Seleccione estado socioeconomico</option>
                      <option value="extreme_poverty">Pobreza extrema</option>
                      <option value="poverty">Pobreza</option>
                      <option value="vulnerability">Vulberabilidad</option>
                      <option value="not_poor">No pobre</option>
                    </select>
                  </div>
                  <div>
                    <br>
                  <h2>Otros Ingresos Del Grupo Familiar</h2>
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                      <label>Asistencia financiera:</label>
                    <input name="financial_assistance" class="form-control" v-model="student.financial_assistance" type="text" placeholder="₡ Ayuda Financiera">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                      <label>Asistencia voluntaria:</label>
                    <input class="form-control" v-model="student.voluntary_assistance" type="text" placeholder="₡ Ayuda Voluntaria">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                      <label>Ingresos de renta:</label>
                    <input name="rental_income" class="form-control" v-model="student.rental_income" type="text" placeholder="₡ Arquileres">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                      <label>Otros ingresos:</label>
                    <input name="others_income" class="form-control" v-model="student.others_income" type="text" placeholder="₡ Otros(Especifique)">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                      <label>Total de ingresos:</label>
                    <input name="total_income" class="form-control" v-model="student.total_income" type="text" placeholder="₡ Ingresos Totales">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3  form-check-inline" >
                    <label>Clasificó:</label>
                    <input class="form-con" style="width: 2em; height: 2em; margin-top: .25em; vertical-align:top; border-radius:.25em" v-model="student.clasification" type="checkbox">
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
    name: 'editStudents',
    components: {Swal},
    props:['data_student'],
    
    data(){
      return{
        student: {
                name: '',
                nationality: '',
                birthdate: '',
                card: '',   
                salarial_constance: '',
                legal_guardian_name: '',
                legal_guardian_card: '',
                place_residence: '',
                phone_number: '',
                socioeconomic_status: '', /* ['extreme_poverty', 'poverty', 'vulnerabilty', 'not_poor']*/
                total_income_family: '',
                family_member_total: '',
                total_per_capita: '',
                clasification: '',
                financial_assistance: '',
                voluntary_assistance: '',
                rental_income: '',
                others_income: '',
                total_income: '',
            },
            idStudent: ''
      } 
    },
    created(){
      const Students = JSON.parse(this.data_student)
      this.idStudent = Students.id
      this.student.name = Students.name
      this.student.nationality = Students.nationality
      this.student.birthdate = Students.birthdate
      this.student.card = Students.card
      this.student.salarial_constance = Students.salarial_constance
      this.student.legal_guardian_name = Students.legal_guardian_name
      this.student.legal_guardian_card = Students.legal_guardian_card
      this.student.place_residence = Students.place_residence
      this.student.phone_number = Students.phone_number
      this.student.socioeconomic_status = Students.socioeconomic_status
      this.student.total_income_family = Students.total_income_family
      this.student.family_member_total = Students.family_member_total
      this.student.total_per_capita = Students.total_per_capita
      this.student.clasification = Students.clasification
      this.student.financial_assistance = Students.financial_assistance
      this.student.voluntary_assistance = Students.voluntary_assistance
      this.student.rental_income = Students.rental_income
      this.student.others_income = Students.others_income
      this.student.total_income = Students.total_income

    },
    methods:{
      send(){
        if(this.student.name === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El nombre no puede estar vacío'
            })
            return false
          }
          if(this.student.nationality === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'La nacionalidad no puede estar vacío'
            })
            return false
          }
          if(this.student.card === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'La cedula no puede estar vacío'
            })
            return false
          }
          if(this.student.birthdate === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'La fecha de nacimiento no puede estar vacío'
            })
            return false
          }
          // // if(this.student.salarial_constance === ''){
          // //   Swal.fire({
          // //     icon: 'warning',
          // //     title: 'Atención',
          // //     text: 'La constancia salarial no puede estar vacío'
          // //   })
          // return false
          // }
          if(this.student.legal_guardian_name === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El nombre del encargado legal no puede estar vacío'
            })
            return false
          }
          if(this.student.legal_guardian_card === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'La cedula del encargado legal no puede estar vacío'
            })
            return false
          }
          if(this.student.place_residence === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El lugar de residencia no puede estar vacío'
            })
            return false
          }
          if(this.student.phone_number === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El numero telefonico no puede estar vacío'
            })
            return false
          }
          if(this.student.socioeconomic_status === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El estado socioeconomico no puede estar vacío'
            })
            return false
          }
          if(this.student.total_income_family === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El ingreso de familia no puede estar vacío'
            })
            return false
          }
          if(this.student.family_member_total === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El total de miembros de familia no puede estar vacío'
            })
            return false
          }
          if(this.student.total_income === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El total de ingreso no puede estar vacío'
            })
            return false
          }

          axios.put('/update-student/' + this.idStudent, this.student).then(response=>{
            Swal.fire({
              icon: 'success',
              title: 'Datos cambiados',
              text: 'Los datos se han editado con éxito'
            });
          }).catch(error=>{
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Se ha encontrado un error'
            })
          })
      }
    }
}
</script>