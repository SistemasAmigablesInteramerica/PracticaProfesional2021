<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListGradeController extends Controller
{
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_grade'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('grades/lists-gradeinfo');
    }

    
}

