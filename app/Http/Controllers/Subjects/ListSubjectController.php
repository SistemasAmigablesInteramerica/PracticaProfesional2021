<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListSubjectController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_subjects'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('subjects/lists-subjects');
    }

}
