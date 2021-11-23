<?php

namespace App\Http\Controllers\Subjects;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListSubjectGradeController extends Controller
{
    //
    public function __construct()
    {

    }
    public function create()
    {
        return view('subjects/list-subjectgrade');
    }
}
