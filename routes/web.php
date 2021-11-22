<?php 

use App\Http\Controllers\Grades\GradeController; 
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
Route::put('/update-employment/{id}', [EmploymentController::class, 'update']);
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
Route::get('/lista-de-materiasygrados', [App\Http\Controllers\Subjects\SubjectGradeController::class, 'create'])->name('list-subjectgradeinfo');
Route::get('/list-subjectGrade', [App\Http\Controllers\Subjects\SubjectGradeController::class, 'list']);
Route::get('/edit-subjectGrade/{id}', [SubjectGradeController::class, 'edit']);
Route::post('/store-subjectgrade', [SubjectGradeController::class, 'store']);
Route::put('/update-subjectgrade/{id}', [SubjectGradeController::class, 'update']);
// Fin de rutas de asignar materia-grado


// Inicio de rutas de asignar materia-profesor
Route::get('/asignar-materia-profesor', [App\Http\Controllers\Subjects\SubjectTeacherController::class, 'create'])->name('insert-subjectteacherinfo');
Route::post('/store-subjectteacher', [SubjectTeacherController::class, 'store']);
// Fin de rutas de asignar materia-profesor


// Inicio de rutas de asignar materia-estudiante
Route::get('/asignar-materia-estudiante', [App\Http\Controllers\GradeSubjectStudent\GradeSubjectStudentController::class, 'create'])->name('insert-gradesubjectstudentinfo');
Route::post('/store-gradesubjectstudent', [GradeSubjectStudentController::class, 'store']);
// Fin de rutas de asignar materia-estudiante

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
 

