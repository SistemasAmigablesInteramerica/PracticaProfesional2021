 <template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 100%;border: 10px solid white; background-color: white;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Materias</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(subjects, index) in listsSubjects" :key="subjects.id">
      <th scope="row">{{ index +1 }}</th>
      <th>{{ subjects.name }}</th>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listsSubjects',
    data(){
        return{
            listsSubjects: [],
        }
    },
    created() {
        axios.get('lists-subjects').then(response =>{
            this.listsSubjects = response.data
        })
    }
}
</script> 