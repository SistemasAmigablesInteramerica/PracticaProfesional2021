<?php 

// use App\Controllers\Grades\GradeController; 
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

Route::get('/registro-de-secciones', [App\Http\Controllers\GradeController::class, 'create'])->name('insert-gradeinfo');

Route::get('/registro-de-profesores', [App\Http\Controllers\TeacherController::class, 'create'])->name('insert-teacherinfo');

Route::get('/registro-de-materias', [App\Http\Controllers\SubjectController::class, 'create'])->name('insert-subjectinfo');

Route::get('/registro-de-familiares', [App\Http\Controllers\StudentRelativeController::class, 'create'])->name('insert-studentrelativesinfo');

Route::get('/asignar-materia-grado', [App\Http\Controllers\SubjectGradeController::class, 'create'])->name('insert-subjectgradeinfo');

Route::get('/asignar-materia-profesor', [App\Http\Controllers\SubjectTeacherController::class, 'create'])->name('insert-subjectteacherinfo');

Route::get('/verview-de-secciones', [App\Http\Controllers\ViewGradeController::class, 'create'])->name('view-gradeinfo');

Route::get('/verview-de-profesores', [App\Http\Controllers\ViewTeacherController::class, 'create'])->name('view-teacherinfo');
view
Route::get('/verview-de-materias', [App\Http\Controllers\ViewSubjectController::class, 'create'])->name('view-subjectinfo');

Route::get('/verview-de-familiares', [App\Http\Controllers\ViewStudentRelativeController::class, 'create'])->name('view-studentrelativesinfo');

Route::get('/verview-materia-grado', [App\Http\Controllers\ViewSubjectGradeController::class, 'create'])->name('view-subjectgradeinfo');

Route::get('/verview-materia-profesor', [App\Http\Controllers\ViewSubjectTeacherController::class, 'create'])->name('view-subjectteacherinfo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
