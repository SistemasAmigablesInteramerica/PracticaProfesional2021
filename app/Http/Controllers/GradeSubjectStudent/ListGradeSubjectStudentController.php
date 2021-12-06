<?php

namespace App\Http\Controllers\GradeSubjectStudent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListGradeSubjectStudentController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        // abort_if(Gate::denies('view_gradesubjectstudent'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('grades/list-gradesubjectstudentinfo');
    }
}
