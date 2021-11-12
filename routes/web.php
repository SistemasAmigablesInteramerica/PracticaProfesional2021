<?php 

use App\Http\Controllers\Grades\GradeController; 
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Subjects\SubjectController; 
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
Route::post('/store-student', [StudentController::class, 'store']);

Route::get('/registro-de-secciones', [App\Http\Controllers\Grades\GradeController::class, 'create'])->name('insert-gradeinfo');
Route::post('/store-grade', [GradeController::class, 'store']);

Route::get('/registro-de-profesores', [App\Http\Controllers\teachers\TeacherController::class, 'create'])->name('insert-teacherinfo');
Route::post('/store-teacher', [TeacherController::class, 'store']);

Route::get('/registro-de-materias', [App\Http\Controllers\Subjects\SubjectController::class, 'create'])->name('insert-subjectinfo');
Route::post('/store-subject', [SubjectController::class, 'store']);

Route::get('/registro-de-familiares', [App\Http\Controllers\StudentRelativeController::class, 'create'])->name('insert-studentrelativesinfo');

Route::get('/asignar-materia-grado', [App\Http\Controllers\SubjectGradeController::class, 'create'])->name('insert-subjectgradeinfo');

Route::get('/asignar-materia-profesor', [App\Http\Controllers\SubjectTeacherController::class, 'create'])->name('insert-subjectteacherinfo');

Route::get('/ver-de-secciones', [App\Http\Controllers\ViewGradeController::class, 'create'])->name('view-gradeinfo');

Route::get('/ver-de-profesores', [App\Http\Controllers\ViewTeacherController::class, 'create'])->name('view-teacherinfo');

Route::get('/ver-de-materias', [App\Http\Controllers\ViewSubjectController::class, 'create'])->name('view-subjectinfo');

Route::get('/ver-de-familiares', [App\Http\Controllers\ViewStudentRelativeController::class, 'create'])->name('view-studentrelativesinfo');

Route::get('/ver-materia-grado', [App\Http\Controllers\ViewSubjectGradeController::class, 'create'])->name('view-subjectgradeinfo');

Route::get('/ver-materia-profesor', [App\Http\Controllers\ViewSubjectTeacherController::class, 'create'])->name('view-subjectteacherinfo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 

