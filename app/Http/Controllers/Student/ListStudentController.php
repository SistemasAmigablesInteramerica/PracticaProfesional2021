<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListStudentController extends Controller
{
    //
    public function __construct()
    {
     $this->middleware('auth');
    }

    public function create()
    {
        abort_if(Gate::allows('auth'), Response:: HTTP_FORBIDDEN, 'No tiene los permisos para acceder a esta pagina');
        return view('students/list-studentsinfo');
    }

    
}
