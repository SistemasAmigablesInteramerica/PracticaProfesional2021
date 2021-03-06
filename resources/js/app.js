/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('createGrade', require("./components/Grades/createGrade.vue").default);
Vue.component('createUserroles', require("./components/UserRoles/createUserRoles.vue").default);
Vue.component('createStudent', require("./components/students/createStudent.vue").default);
Vue.component('createTeacher', require("./components/teachers/createTeacher.vue").default);
Vue.component('createSubject', require("./components/Subjects/createSubject.vue").default);
Vue.component('createRoles', require("./components/Roles/createRoles.vue").default);
Vue.component('createPermissions', require("./components/Permissions/createPermissions.vue").default);
Vue.component('createPermissionsroles', require("./components/Permissions/createPermissionsRoles.vue").default);
Vue.component('createSubjectteacher', require("./components/Subjects/createSubjectteacher.vue").default);
Vue.component('createSubjectgrade', require("./components/Subjects/createSubjectgrade.vue").default);
Vue.component('createStudentrelative', require("./components/students/createStudentRelative.vue").default);
Vue.component('createAttendancehistory', require("./components/AttendanceHistory/createAttendanceHistory.vue").default);
Vue.component('createGradesubjectstudent', require("./components/Grades/createGradesubjectstudent.vue").default);
Vue.component('createEmployment', require("./components/teachers/createEmployment.vue").default);


Vue.component('listsGrade', require("./components/Grades/listsGrade.vue").default);
Vue.component('listRoles', require("./components/Roles/listRoles.vue").default);
Vue.component('listUserroles', require("./components/UserRoles/listUserRoles.vue").default);
Vue.component('listUser', require("./components/User/listUser.vue").default);
Vue.component('listPermissionsroles', require("./components/Permissions/listPermissionsRoles.vue").default);
Vue.component('listPermissions', require("./components/Permissions/listPermissions.vue").default);
Vue.component('listGradesubjectstudent', require("./components/Grades/listGradeSubjectStudent.vue").default);
Vue.component('listSubjectgrade', require("./components/Subjects/listSubjectgrade.vue").default);
Vue.component('listSubjectteacher', require("./components/Subjects/listSubjectTeacher.vue").default);
Vue.component('listsSubjects', require("./components/Subjects/listsSubjects.vue").default);
Vue.component('listStudent', require("./components/students/listStudent.vue").default);
Vue.component('listTeacher', require("./components/teachers/listTeacher.vue").default);
Vue.component('listEmployment', require("./components/teachers/listEmployment.vue").default);
Vue.component('listStudentrelative', require("./components/students/listStudentRelative.vue").default);
Vue.component('listAttendancehistory', require("./components/AttendanceHistory/listAttendanceHistory.vue").default);

Vue.component('editPermissionsroles', require("./components/Permissions/editPermissionsRoles.vue").default);
Vue.component('editGrade', require("./components/Grades/editGrade.vue").default);
Vue.component('editRoles', require("./components/Roles/editRoles.vue").default);
Vue.component('editUserroles', require("./components/UserRoles/editUserRoles.vue").default);
Vue.component('editPermissions', require("./components/Permissions/editPermissions.vue").default);
Vue.component('editGradesubjectstudent', require("./components/Grades/editGradeSubjectStudent.vue").default);
Vue.component('editStudents', require("./components/students/editStudents.vue").default);
Vue.component('editSubjectgrade', require("./components/Subjects/editSubjectgrade.vue").default);
Vue.component('editSubject', require("./components/Subjects/editSubject.vue").default);
Vue.component('editSubjectteacher', require("./components/Subjects/editSubjectTeacher.vue").default);
Vue.component('editTeacher', require("./components/teachers/editTeacher.vue").default);
Vue.component('editStudentrelative', require("./components/students/editStudentRelative.vue").default);
// Vue.component('editEmployment', require("./components/UserRoles/editEmployment.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
});
