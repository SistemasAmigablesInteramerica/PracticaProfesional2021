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
Vue.component('createStudent', require("./components/students/createStudent.vue").default);
Vue.component('createTeacher', require("./components/teachers/createTeacher.vue").default);
Vue.component('createSubject', require("./components/Subjects/createSubject.vue").default);
Vue.component('createSubjectteacher', require("./components/Subjects/createSubjectteacher.vue").default);
Vue.component('createSubjectgrade', require("./components/Subjects/createSubjectgrade.vue").default);
Vue.component('createStudentrelative', require("./components/students/createStudentRelative.vue").default);
Vue.component('createAttendancehistory', require("./components/AttendanceHistory/createAttendanceHistory.vue").default);
Vue.component('createGradesubjectstudent', require("./components/Grades/createGradesubjectstudent.vue").default);
Vue.component('index', require("./components/index.vue").default);


Vue.component('listsGrade', require("./components/Grades/listsGrade.vue").default);

Vue.component('listStudent', require("./components/students/listStudent.vue").default);
Vue.component('listTeacher', require("./components/teachers/listTeacher.vue").default);
Vue.component('listStudentrelative', require("./components/students/listStudentRelative.vue").default);
Vue.component('listAttendancehistory', require("./components/AttendanceHistory/listAttendanceHistory.vue").default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({ 
    el: '#app',
});
