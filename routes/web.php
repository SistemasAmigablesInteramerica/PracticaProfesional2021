<?php

use App\Http\Controllers\Grades\GradeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Roles\RolesController;
use App\Http\Controllers\UserRoles\UserRolesController;
use App\Http\Controllers\PermissionsRoles\PermissionsRolesController;
use App\Http\Controllers\Permissions\PermissionsController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Subjects\SubjectController;
use App\Http\Controllers\Subjects\SubjectTeacherController;
use App\Http\Controllers\Subjects\SubjectGradeController;
use App\Http\Controllers\teachers\TeacherController;
use App\Http\Controllers\Student\StudentRelativeController;
use App\Http\Controllers\GradeSubjectStudent\GradeSubjectStudentController;
use App\Http\Controllers\Attendance\AttendanceHistoryController;
use Illuminate\Support\Facades\route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\IndexController::class, 'create'])->name('index');

// Inicio de rutas de estudiantes
Route::get('/registro-de-estudiantes', [App\Http\Controllers\Student\StudentController::class, 'create'])->name('insert-studentsinfo');
Route::get('/lista-de-estudiantes', [App\Http\Controllers\Student\ListStudentController::class, 'create'])->name('list-studentsinfo');
Route::get('/edit-student/{id}', [App\Http\Controllers\Student\StudentController::class, 'edit']);
Route::get('/list-student', [App\Http\Controllers\Student\StudentController::class, 'list']);
Route::post('/store-student', [StudentController::class, 'store']);
Route::put('/update-student/{id}', [StudentController::class, 'update']);
// Fin de rutas de estudiantes


// Inicio de rutas de secciones
Route::get('/registro-de-secciones', [App\Http\Controllers\Grades\GradeController::class, 'create'])->name('insert-gradeinfo');
Route::get('/lista-de-secciones', [App\Http\Controllers\Grades\ListGradeController::class, 'create'])->name('lists-gradeinfo');
Route::get('/edit-grade/{id}', [App\Http\Controllers\Grades\GradeController::class, 'edit']);
Route::get('/lists-grades', [App\Http\Controllers\Grades\GradeController::class, 'lists']);
Route::post('/store-grade', [GradeController::class, 'store']);
Route::put('/update-grade/{id}', [GradeController::class, 'update']);
// Fin de rutas de secciones


// Inicio de rutas de profesores
Route::get('/registro-de-profesores', [App\Http\Controllers\teachers\TeacherController::class, 'create'])->name('insert-teacherinfo');
Route::get('/lista-de-profesores', [App\Http\Controllers\teachers\ListTeacherController::class, 'create'])->name('list-teacherinfo');
Route::get('/edit-teacher/{id}', [App\Http\Controllers\teachers\TeacherController::class, 'edit']);
Route::get('/list-teacher', [App\Http\Controllers\teachers\TeacherController::class, 'list']);
Route::post('/store-teacher', [TeacherController::class, 'store']);
Route::put('/update-teacher/{id}', [TeacherController::class, 'update']);
// Fin de rutas de profesores

// Inicio de rutas de empleo
Route::get('/registro-de-empleos', [App\Http\Controllers\teachers\EmploymentController::class, 'create'])->name('insert-employmentinfo');
Route::get('/lista-de-aspirante', [App\Http\Controllers\teachers\ListEmploymentController::class, 'create'])->name('list-employmentinfo');
Route::get('/edit-employment/{id}', [App\Http\Controllers\teachers\EmploymentController::class, 'edit']);
Route::get('/list-employment', [App\Http\Controllers\teachers\EmploymentController::class, 'list']);
Route::post('/store-employment', [App\Http\Controllers\teachers\EmploymentController::class, 'store']);
Route::put('/update-employment/{id}', [App\Http\Controllers\teachers\EmploymentController::class, 'update']);
// Fin de rutas de empleo

// Inicio de rutas de las materias
Route::get('/registro-de-materias', [App\Http\Controllers\Subjects\SubjectController::class, 'create'])->name('insert-subjectinfo');
Route::get('/lista-de-materias', [App\Http\Controllers\Subjects\ListSubjectController::class, 'create'])->name('lists-subjects');
Route::get('/edit-subject/{id}', [App\Http\Controllers\Subjects\SubjectController::class, 'edit']);
Route::get('/lists-subjects', [App\Http\Controllers\Subjects\SubjectController::class, 'lists']);
Route::post('/store-subject', [SubjectController::class, 'store']);
Route::put('/update-subject/{id}', [SubjectController::class, 'update']);
// Fin de rutas de las materias


// Inicio de rutas de los familiares
Route::get('/registro-de-familiares', [App\Http\Controllers\Student\StudentRelativeController::class, 'create'])->name('insert-studentrelativesinfo');
Route::get('/list-studentRelative', [App\Http\Controllers\Student\StudentRelativeController::class, 'list']);
Route::get('/edit-studentrelative/{id}', [StudentRelativeController::class, 'edit']);
Route::get('/lista-de-familiares', [App\Http\Controllers\Student\ListStudentRelativeController::class, 'create'])->name('list-studentrelativesinfo');
Route::post('/store-StudentRelative', [StudentRelativeController::class, 'store']);
Route::put('/update-studentrelative/{id}', [StudentRelativeController::class, 'update']);
// Fin de rutas de los familiares


// Inicio de rutas de Asistencia
Route::get('/registro-de-asistencias', [App\Http\Controllers\Attendance\AttendanceHistoryController::class, 'create'])->name('insert-attendancehistory');
Route::get('/list-attendanceHistory', [App\Http\Controllers\Attendance\AttendanceHistoryController::class, 'list']);
Route::get('/edit-attendancehistory/{id}', [AttendanceHistoryController::class, 'edit']);
Route::get('/lista-de-asistencia', [App\Http\Controllers\Attendance\ListAttendanceHistoryController::class, 'create'])->name('list-attendancehistoryinfo');
Route::post('/store-attendancehistory', [AttendanceHistoryController::class, 'store']);
Route::put('/update-attendancehistory/{id}', [AttendanceHistoryController::class, 'update']);
// Fin de rutas de Asistencia


// Inicio de rutas de asignar materia-grado
Route::get('/asignar-materia-grado', [App\Http\Controllers\Subjects\SubjectGradeController::class, 'create'])->name('insert-subjectgradeinfo');
Route::get('/lista-de-materiasygrados', [App\Http\Controllers\Subjects\ListSubjectGradeController::class, 'create'])->name('list-subjectgrade');
Route::get('/list-subjectgrade', [App\Http\Controllers\Subjects\SubjectGradeController::class, 'list']);
Route::get('/edit-subjectgrade/{id}', [SubjectGradeController::class, 'edit']);
Route::post('/store-subjectgrade', [SubjectGradeController::class, 'store']);
Route::put('/update-subjectgrade/{id}', [SubjectGradeController::class, 'update']);
// Fin de rutas de asignar materia-grado


// Inicio de rutas de asignar materia-profesor
Route::get('/asignar-materia-profesor', [App\Http\Controllers\Subjects\SubjectTeacherController::class, 'create'])->name('insert-subjectteacherinfo');
Route::get('/lista-de-materiasyprofesores', [App\Http\Controllers\Subjects\ListSubjectTeacherController::class, 'create'])->name('list-subjectteacherinfo');
Route::get('/list-subjectteacher', [App\Http\Controllers\Subjects\SubjectTeacherController::class, 'list']);
Route::get('/edit-subjectteacher/{id}', [SubjectTeacherController::class, 'edit']);
Route::post('/store-subjectteacher', [SubjectTeacherController::class, 'store']);
Route::put('/update-subjectteacher/{id}', [SubjectTeacherController::class, 'update']);
// Fin de rutas de asignar materia-profesor


// Inicio de rutas de asignar materia-estudiante
Route::get('/asignar-materia-estudiante', [App\Http\Controllers\GradeSubjectStudent\GradeSubjectStudentController::class, 'create'])->name('insert-gradesubjectstudentinfo');
Route::get('/lista-de-materiasyestudiantes', [App\Http\Controllers\GradeSubjectStudent\ListGradeSubjectStudentController::class, 'create'])->name('list-gradesubjectstudentinfo');
Route::get('/list-gradesubjectstudent', [App\Http\Controllers\GradeSubjectStudent\GradeSubjectStudentController::class, 'list']);
Route::get('/edit-gradesubjectstudent/{id}', [GradeSubjectStudentController::class, 'edit']);
Route::post('/store-gradesubjectstudent', [GradeSubjectStudentController::class, 'store']);
Route::put('/update-gradesubjectstudent/{id}', [GradeSubjectStudentController::class, 'update']);
// Fin de rutas de asignar materia-estudiante

// Inicio de rutas de roles
Route::get('/crear-roles', [App\Http\Controllers\Roles\RolesController::class, 'create'])->name('insert-rolesinfo');
Route::get('/lista-de-roles', [App\Http\Controllers\Roles\ListRolesController::class, 'create'])->name('list-rolesinfo');
Route::get('/list-roles', [App\Http\Controllers\Roles\RolesController::class, 'lists']);
Route::get('/select-role/{id}', [App\Http\Controllers\Roles\RolesController::class, 'selectRole']);
Route::get('/edit-roles/{id}', [RolesController::class, 'edit']);
Route::post('/store-roles', [RolesController::class, 'store']);
Route::put('/update-roles/{id}', [RolesController::class, 'update']);
// Fin de rutas de roles

// Inicio de rutas de roles
Route::get('/crear-permisos', [App\Http\Controllers\Permissions\PermissionsController::class, 'create'])->name('insert-permissionsinfo');
Route::get('/lista-de-permisos', [App\Http\Controllers\Permissions\ListPermissionsController::class, 'create'])->name('list-permissionsinfo');
Route::get('/list-permissions', [App\Http\Controllers\Permissions\PermissionsController::class, 'lists']);
Route::get('/edit-permissions/{id}', [PermissionsController::class, 'edit']);
Route::post('/store-permissions', [PermissionsController::class, 'store']);
Route::put('/update-permissions/{id}', [PermissionsController::class, 'update']);
Route::get('/list-permission', [App\Http\Controllers\Permissions\PermissionsController::class, 'lista']);
// No se que hice pero funciona por favor no lo toquen :v
// Fin de rutas de roles

// Inicio de rutas de asignar roles y permisos
Route::get('/asignar-rolesypermisos', [App\Http\Controllers\PermissionsRoles\PermissionsRolesController::class, 'create'])->name('insert-permissionsrolesinfo');
Route::get('/lista-de-rolesypermisos', [App\Http\Controllers\PermissionsRoles\ListPermissionsRolesController::class, 'create'])->name('list-permissionsrolesinfo');
Route::get('/list-permissionsroles', [App\Http\Controllers\PermissionsRoles\PermissionsRolesController::class, 'list']);
Route::get('/edit-permissionsroles/{id}', [PermissionsRolesController::class, 'edit']);
Route::post('/store-permissionsroles', [PermissionsRolesController::class, 'store']);
Route::put('/update-permissionsroles/{id}', [PermissionsRolesController::class, 'update']);

// Fin de rutas de asignar roles y permisos

// Inicio de rutas de asignar roles y permisos
Route::get('/asignar-usuariosyroles', [App\Http\Controllers\UserRoles\UserRolesController::class, 'create'])->name('insert-userrolesinfo');
Route::get('/lista-de-usuariosyroles', [App\Http\Controllers\UserRoles\ListUserRolesController::class, 'create'])->name('list-userrolesinfo');
Route::get('/list-userroles', [App\Http\Controllers\UserRoles\UserRolesController::class, 'lists']);
Route::get('/edit-userroles/{id}', [UserRolesController::class, 'edit']);
Route::post('/store-userroles', [UserRolesController::class, 'store']);
Route::put('/update-userroles/{id}', [UserRolesController::class, 'update']);
// Fin de rutas de asignar roles y permisos

// Inicio de rutas de usuarios

Route::get('/lista-de-usuarios', [App\Http\Controllers\User\ListUserController::class, 'create'])->name('list-userinfo');
Route::get('/list-user', [App\Http\Controllers\User\UserController::class, 'list']);

// Fin de rutas de usuarios


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


