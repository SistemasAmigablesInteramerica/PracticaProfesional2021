<?php

namespace App\Http\Controllers\Subjects;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListSubjectGradeController extends Controller
{
    //
    public function __construct()
    {

    }
    public function create()
    {
        abort_if(Gate::denies('view_subjectgrade'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('subjects/list-subjectgrade');
    }
}
