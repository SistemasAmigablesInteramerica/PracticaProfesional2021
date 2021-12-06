<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListTeacherController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_teacher'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('teachers/list-teacherinfo');
    }   
}
