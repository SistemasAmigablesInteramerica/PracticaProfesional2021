<template>
<div class="table-responsive-sm" style="min-height: 400px; border-radius: 20px;width: 50%;border: 10px solid white; background-color: white;margin-top:100px;">
    <table class="table table-light table-md">
  <thead>
    <tr>
      <th scope="col">#</th>
         <th scope="col">Profesor</th>
            <th scope="col">Grados y Materias</th>
      <th scope="col">Acciónes</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(teacher, index) in listSubjectTeacher" :key="teacher.id">
      <th scope="row">{{ index +1 }}</th>
      <th >{{teacher.names}}</th>

      <th ><label v-for="relation of teacher.subject_grades" class="label label-primary p-1">{{relation.grades.name}}: {{relation.subject.name}}</label>

      </th>
      <td><a class="btm btm-info btm-se" :href="edit(teacher.id)"><span class="fa fa-edit"></span></a></td>
    </tr>
  </tbody>
    </table>
</div>
</template>

<script>
export default {
    name: 'listSubjectTeacher',
    data(){
        return{
            listSubjectTeacher: [],
            listsSubjects: [],
            listteacher:[],

        }
    },
    created() {
        axios.get('/list-subjectteacher').then(response =>{
            this.listSubjectTeacher = response.data
            console.log(this.listSubjectTeacher)
        })
          axios.get('lists-subjects').then(response =>{
            this.listsSubjects = response.data
        })
           axios.get('list-teacher').then(response=>{
            this.listteacher = response.data
        })
    },
       methods: {
      edit(id){
        return '/edit-subjectteacher/' + id
      }
    },
}
</script>
