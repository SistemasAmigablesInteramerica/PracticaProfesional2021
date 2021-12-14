<template>
<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row" style="min-height: 550px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Expediente Del Beneficiario Del Comedor Estudiantil</h2>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Nombre completo:</label>
                      <input name="name" class="form-control" v-model="student.name" type="text" placeholder="Nombre Completo Del Estudiante">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <label>Nacionalidad:</label>
                    <input name="nationality" class="form-control" v-model="student.nationality" type="text" placeholder="Nacionalidad" >
                  </fieldset>
                  <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Número de Cédula</label>
                      <input name="card" class="form-control" v-model="student.card" type="number" placeholder="Numero de Cédula">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                    <label>Fecha de Nacimiento:</label>
                   <input name="birthdate" class="form-control" v-model="student.birthdate" type="date" placeholder="Fecha de Nacimiento">
                  </fieldset>
                      <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                  <label>Nombre del Encargado Legal:</label>
                      <input name="legal_guardian_name" class="form-control" v-model="student.legal_guardian_name" type="text" placeholder="Inserte el Nombre">
                    </fieldset>
                        <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                      <label>Cédula del encargado legal:</label>
                      <input name="legal_guardian_card" class="form-control" v-model="student.legal_guardian_card" type="number" placeholder="No.Cédula del encargado legal" pattern="">
                    </fieldset>
                       <br>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <fieldset>
                  <label>Telefono de domicilio:</label>
                    <input type="tel" class="form-control" v-model="student.phone_number" name="phone_number" placeholder="2777-0000">
                    </fieldset>
                            <br>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label>Domicilio:</label>
                      <input name="place_residence" class="form-control" v-model="student.place_residence" type="text" placeholder="Direccion Del Domicilio">
                      </fieldset>
                      <br>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                  <label>Subir La Constancia Salarial:</label>
                    <input class="form-control" type="file" @change="onUploadFile" name="fileitems" accept="image/*,.txt,.doc,.docx,.document,.pdf">
                    <span>{{ItemsNameFile}}</span>
                    </fieldset>
                    <br>
                  </div>
                  <div>
                    <br>
                  <h2>Otros Ingresos Del Grupo Familiar</h2>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <fieldset>
                      <label>Asistencia financiera:</label>
                    <input name="financial_assistance" class="form-control" @change="sumTotalIncome" v-model="student.financial_assistance" type="number" placeholder="₡ Ayuda Financiera">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <fieldset>
                      <label>Asistencia voluntaria:</label>
                    <input class="form-control" @change="sumTotalIncome" v-model="student.voluntary_assistance" type="number" placeholder="₡ Ayuda Voluntaria">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <fieldset>
                      <label>Ingresos de renta:</label>
                    <input name="rental_income" class="form-control" @change="sumTotalIncome" v-model="student.rental_income" type="number" placeholder="₡ Arquileres">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <fieldset>
                      <label>Otros ingresos:</label>
                    <input name="others_income" class="form-control" @change="sumTotalIncome" v-model="student.others_income" type="number" placeholder="₡ Otros(Especifique)">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <fieldset>
                      <label>Total de ingresos:</label>
                    <input name="total_income" class="form-control" v-model="student.total_income" type="number" readonly placeholder="₡ Ingresos Totales">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                    <small>Declaro bajo juramento que toda la información contenida en este formulario es veraz y que cualquier falsedad me hará acreedor de la pérdida del beneficio solicitado, sin perjuicio de las responsabilidades legales que procedan. Así mismo, me comprometo a cumplir con los lineamientos de Programas de Equidad, reglamento de Transporte Estudiantil. En caso de incumplir la normat</small>
                    <br>
                      <label class="form-check-label">Acepto:</label>
                    <input name="studentcheck" class="form-check-input" v-model="confirmation" type="checkbox">
                    </fieldset>
                    <br>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12" >
                    <fieldset  style="text-align: center">
                      <button type="submit" @click="send" class="btn btn-primary">Registrar</button>
                    </fieldset>
                    <br>
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
                legal_guardian_card: '',
                place_residence: '',
                phone_number: '',
                socioeconomic_status: '', /* ['extreme_poverty', 'poverty', 'vulnerabilty', 'not_poor']*/
                total_income_family: '',
                family_member_total: '',
                total_per_capita: '',
                clasification: '',
                financial_assistance: 0,
                voluntary_assistance: 0,
                rental_income: 0,
                others_income: 0,
                total_income: 0,
            },
              confirmation: '',
              ItemsNameFile:'',
              formData:''
        }
    },
    methods:{
        sumTotalIncome(){
            this.student.total_income = parseFloat(this.student.financial_assistance) + parseFloat(this.student.voluntary_assistance) + parseFloat(this.student.rental_income) + parseFloat(this.student.others_income)
        },
        send() {

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
          if(this.student.total_income === ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'El total de ingreso no puede estar vacío'
            })
            return false
          }
          if(this.confirmation === 'false' || this.confirmation == ''){
            Swal.fire({
              icon: 'warning',
              title: 'Atención',
              text: 'Debe aceptar los terminos y condiciones'
            })
            return false
          }
            axios.post('/store-student', this.student).then(response => {

              this.student.name = '',
              this.student.nationality = '',
              this.student.birthdate = '',
              this.student.card = '',
              this.student.clasification = '',
              this.student.salarial_constance = '',
              this.student.legal_guardian_name = '',
              this.student.legal_guardian_card = '',
              this.student.place_residence = '',
              this.student.phone_number = '',
              this.student.socioeconomic_status = '',
              this.student.total_income_family = '',
              this.student.family_member_total = '',
              this.student.total_per_capita = '',
              this.student.clasification = '',
              this.student.financial_assistance = '',
              this.student.voluntary_assistance = '',
              this.student.rental_income = '',
              this.student.others_income = '',
              this.student.total_income = '',

                Swal.fire({
                    icon: 'success',
                    title: 'Datos registrados',
                    text: 'El estudiante se ha registrado con éxito.',
                });


            }).catch(error => {
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se ha encontrado un error.',
                });
            })


        },
       onUploadFile(e){
            this.formDataFile = new FormData();
            let files = e.target.files || e.dataTransfer.files;
            let fileSizes = 0;
            for(let filein in files){
                if (!isNaN(fileIn)){
                    this.ItemNameFile = e.target.files[fileIn] || e.dataTransfer.files[fileIn];
                    if(this.bytesToSize(files[fileIn].size) > 5 ) {
                          Swal.fire('Atencion', 'El archivo es muy grande solo se permite menor a 5MB', 'warning');
                          return false;
                    }
                     if(this.student.card === '') {
                          Swal.fire('Atencion', 'Debe agregar el numero de cédula primero', 'warning');
                          return false;
                    }
                    fileSizes = files[fileIn].size;
                    this.formData.append("itemsfile", this.ItemsNameFile);
                    this.formData.append("card", this.student.card);
                    console.log(files[fileIn]);
                }
            }
            this.uploadFile();
        },
        bytesToSize(bytes){
        const sizes = [
            "Bytes",
            "KB",
            "MB",
            "GB",
            "TB"
        ];
        if (bytes === 0) return "n/a";
        let i = parseInt(Math.floor(Math.log(Bytes) / Math.log(1024)));
        if (i === 0) return bytes + " " + sizes[i];
        return (bytes / Math.pow(1024, i)).toFixed(2) + " " + sizes[i];
        },
        uploadFile(){
          axios.post("sysconfig bussines/upload-file-logo", this.formDataFile)
          .then(response => {
            this.data.file_logo = response.data;
          }).catch(function (error) {
            Swal.fire('!Oooo', 'No se puede procesar la imagen', 'error');
          });
        },

    }

}
</script>
