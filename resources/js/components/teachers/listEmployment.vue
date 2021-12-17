<template>
    <div style="min-height: 400px; border-radius: 20px; max-width: 100%;border: 10px solid white; background-color: white; margin-top:100px;   overflow-x: scroll; overflow: scroll ">
        <table class="table table-light table-md"
               >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Correo electronico:</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Cédula</th>
                <th scope="col">Telefono</th>
                <th scope="col">Titulos</th>
                <th scope="col">En buscoempleocr</th>
                <th scope="col">Le gustaría trabajar en</th>
                <th scope="col">Egresado o miembro de la comunidad</th>
                <th scope="col">Acciónes</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(employment, index) in listEmployment" :key="employment.id">
                <th scope="row">{{ index +1 }}</th>
                <th>{{ employment.email }}</th>
                <th>{{ employment.name }}</th>
                <th v-if="employment.speciality === 'hotel_events'">Hotelería</th>
                <th v-if="employment.speciality === 'food_drinks'">Alimentos y bebidas</th>
                <th v-if="employment.speciality === 'accounting'">Contabilidad</th>
                <th v-if="employment.speciality === 'computing'">Informática</th>
                <th v-if="employment.speciality === 'occupational_health'">Salud ocupacional</th>
                <th v-if="employment.speciality === 'executive_services'">Ejecutivo para centro de servicio</th>
                <th>{{ employment.card }}</th>
                <th>{{ employment.phone_number }}</th>
                <th>{{ employment.titles }}</th>
                <th v-if="employment.in_empleocr === 1">Si</th>
                <th v-else>No</th>
                <th>{{ employment.place_likeness }}</th>
                <th v-if="employment.graduate_status === 'graduate'">Egresado</th>
                <th v-if="employment.graduate_status === 'community_member'">Miembro de la comunidad</th>
                <td><a class="btm btm-info btm-se" :href="edit(employment.id)"><span class="fa fa-edit"></span></a></td>
            </tr>
            </tbody>
        </table>
    </div>

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
