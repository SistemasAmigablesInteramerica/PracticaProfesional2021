<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListSubjectTeacherController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_subjectteacher'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('subjects/list-subjectteacherinfo');
    }
}
