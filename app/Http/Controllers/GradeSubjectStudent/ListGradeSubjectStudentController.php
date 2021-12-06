<?php

namespace App\Http\Controllers\GradeSubjectStudent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListGradeSubjectStudentController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_gradesubjectstudent') Response::'403', 'No tiene permiso para acceder a esta pagina');
        return view('grades/list-gradesubjectstudentinfo');
    }
}
