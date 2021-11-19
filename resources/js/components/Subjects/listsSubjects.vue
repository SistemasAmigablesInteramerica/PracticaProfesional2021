 <template>
<div class="table-responsive-sm">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Materias</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(subjects, index) in listsSubjects" :key="subject.id">
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
        axios.get('/lists-Subject').then(response =>{
            this.listsSubject = response.data
        })
    }
}
</script> 