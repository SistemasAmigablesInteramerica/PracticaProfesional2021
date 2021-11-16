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

Route::get('/registro-de-estudiantes', [App\Http\Controllers\Student\StudentController::class, 'create'])->name('insert-studentsinfo');
Route::get('/lista-de-estudiantes', [App\Http\Controllers\Student\ListStudentController::class, 'create'])->name('list-studentsinfo');
Route::get('/list-student', [App\Http\Controllers\Student\StudentController::class, 'list']);
Route::post('/store-student', [StudentController::class, 'store']);

Route::get('/registro-de-secciones', [App\Http\Controllers\Grades\GradeController::class, 'create'])->name('insert-gradeinfo');
Route::post('/store-grade', [GradeController::class, 'store']);

Route::get('/registro-de-profesores', [App\Http\Controllers\teachers\TeacherController::class, 'create'])->name('insert-teacherinfo');
Route::post('/store-teacher', [TeacherController::class, 'store']);

Route::get('/registro-de-materias', [App\Http\Controllers\Subjects\SubjectController::class, 'create'])->name('insert-subjectinfo');
Route::post('/store-subject', [SubjectController::class, 'store']);

Route::get('/registro-de-familiares', [App\Http\Controllers\Student\StudentRelativeController::class, 'create'])->name('insert-studentrelativesinfo');
Route::post('/store-StudentRelative', [StudentRelativeController::class, 'store']);

Route::get('/registro-de-asistencias', [App\Http\Controllers\Attendance\AttendanceHistoryController::class, 'create'])->name('insert-attendancehistory');
Route::post('/store-attendancehistory', [AttendanceHistoryController::class, 'store']);

Route::get('/asignar-materia-grado', [App\Http\Controllers\Subjects\SubjectGradeController::class, 'create'])->name('insert-subjectgradeinfo');
Route::post('/store-subjectgrade', [SubjectGradeController::class, 'store']);

Route::get('/asignar-materia-profesor', [App\Http\Controllers\Subjects\SubjectTeacherController::class, 'create'])->name('insert-subjectteacherinfo');
Route::post('/store-subjectteacher', [SubjectTeacherController::class, 'store']);

Route::get('/asignar-materia-estudiante', [App\Http\Controllers\GradeSubjectStudent\GradeSubjectStudentController::class, 'create'])->name('insert-gradesubjectstudentinfo');
Route::post('/store-gradesubjectstudent', [GradeSubjectStudentController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
 

