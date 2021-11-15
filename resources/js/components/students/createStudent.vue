<template>
<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row" style="min-height: 550px; border-radius:10px;width: 100%;border: 10px solid white; background-color: white;">
            <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Expediente Del Beneficiario Del Comedor Estudiantil</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" class="form-control" v-model="student.name" type="text" id="name" placeholder="Nombre Completo Del Estudiante">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                    <input name="nationality" class="form-control" v-model="student.nationality" type="text" id="nationality"  placeholder="Nacionalidad">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="card" class="form-control" v-model="student.card" type="number" id="No.card" placeholder="No.Cédula" pattern="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                    <label for="Birthdate">Fecha de Nacimiento:</label>
                   <input name="birthdate" class="form-control" v-model="student.birthdate" type="date" id="Fecha de birthdate" placeholder="Fecha de Nacimiento" min="1995-01-01">  
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                  <fieldset>
                  <label for="legal_guardian_name">Nombre del Encargado Legal:</label>
                      <input name="legal_guardian_name" class="form-control" v-model="student.legal_guardian_name" type="text" id="legal_guardian_name" placeholder="Inserte el Nombre">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <label for="legal_guardian_card"></label>
                      <input name="legal_guardian_card" class="form-control" v-model="student.legal_guardian_card" type="number" id="legal_guardian_card" placeholder="No.Cédula del encargado legal" pattern="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                  <label for="phone_number">Telefono Del Domicilio:</label>
                    <input type="tel" id="phone_number" class="form-control" v-model="student.phone_number" name="phone_number" placeholder="2777-0000">  
                    </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                      <input name="place_residence" class="form-control" v-model="student.place_residence" type="text" id="place_residence" placeholder="Direccion Del Domicilio">
                      </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                  <label for="archivo">Subir La Constancia Salarial:</label>
                    <input type="file" id="archivo" v-on:change="student.salarial_constance" class="form-control" name="archivo" accept="image/*,.txt,.doc,.docx,.document,.pdf">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="total_income_family" class="form-control" v-model="student.total_income_family" type="text" id="total_income_family" placeholder="₡ Total De Ingresos">
                    </fieldset> 
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="family_member_total" class="form-control" v-model="student.family_member_total" type="text" id="family_member_total" placeholder="/ Numero de Miembros Familiares =">
                    </fieldset> 
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="total_per_capita" class="form-control" v-model="student.total_per_capita" type="text" id="total_per_capita" placeholder=" ₡ = Per Cápita">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                        </div>
                    <label for="socioeconomic_status">Estado Socioeconomico:</label>
                    <select v-model="student.socioeconomic_status" id="socioeconomic_status">
                      <option disabled value=""> Seleccione estado socioeconomico</option>
                      <option value="extreme_poverty">Pobreza extrema</option>
                      <option value="poverty">Pobreza</option>
                      <option value="vulnerability">Vulberabilidad</option>
                      <option value="not_poor">No pobre</option>
                    </select>
                    <br><br>
                  <h2>Otros Ingresos Del Grupo Familiar</h2>
                  <label for="">Ingrese Los Siguientes datos:</label>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="financial_assistence" class="form-control" v-model="student.financial_assistence" type="text" id="financial_assistence" placeholder="₡ Ayuda Financiera">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="voluntary_assistence" class="form-control" v-model="student.voluntary_assistence" type="text" id="voluntary_assistence" placeholder="₡ Ayuda Voluntaria">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="rental_income" class="form-control" v-model="student.rental_income" type="text" id="rental_income" placeholder="₡ Arquileres">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="others" class="form-control" v-model="student.others" type="text" id="others" placeholder="₡ Otros(Especifique)">
                    </fieldset> 
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                    <input name="total_income" class="form-control" v-model="student.total_income" type="text" id="total_income" placeholder="₡ Ingresos Totales">
                    </fieldset> 
                  </div>
                  <div class="col-lg-12">
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
    name: "createStudent",
    components: {Swal},

    data() {
        return {
            student: {
                name: '',
                nationality: '',
                birthdate: '',
                card: '',   
                salarial_constance: '',
                legal_guardian_name: '',
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
            }

        }
    },
    methods:{
        send() {
            axios.post('/store-student', this.student).then(response => {

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