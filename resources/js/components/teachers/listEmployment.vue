<template>
    <table class="table table-light table-md">
      <div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;margin-top:100px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Correo electronico:</th>
      <th scope="col">Nombre</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Cédula</th>
      <th scope="col">Numero de telefono</th>
      <th scope="col">Domicilio:</th>
      <th scope="col">Titulos y capacitaciones</th>
      <th scope="col">Trabaja actualmente</th>
      <th scope="col">En buscoempleocr</th>
      <th scope="col">Condiciones del trabajo solicitado</th>
      <th scope="col">Lugares donde le gustaría trabajar</th>
      <th scope="col">Egresado o miembro de la comunidad</th>
      <th scope="col">Acciónes</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(employment, index) in listEmployment" :key="employment.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ employment.email }}</th>
      <th>{{ employment.name }}</th>
      <th>{{ employment.specility }}</th>
      <th>{{ employment.card }}</th>
      <th>{{ employment.phone_number }}</th>
      <th>{{ employment.place_likeness }}</th>
      <th>{{ employment.titles }}</th>
      <th>{{ employment.do_work }}</th>
      <th>{{ employment.in_empleocr }}</th>
      <th>{{ employment.conditions }}</th>
      <th>{{ employment.place_likeness }}</th>
      <th>{{ employment.graduate_status }}</th>
      <td><a class="btm btm-info btm-se" :href="edit(employment.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
  </div>
    </table>

</template>

<script>
export default {
    name: 'listEmployment',

    data(){
        return{
            listEmployment:[],
        }
    },
    created(){
            axios.get('list-employment').then(response=>{
                    this.listEmployment = response.data
            })
    },
    methods:{
      edit(id){
        return "/edit-employment/" + id
      }

    }
}
</script>
