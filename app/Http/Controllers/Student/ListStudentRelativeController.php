<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListStudentRelativeController extends Controller
{

    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view-relatives'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('students/list-studentrelativesinfo');
    }

}
