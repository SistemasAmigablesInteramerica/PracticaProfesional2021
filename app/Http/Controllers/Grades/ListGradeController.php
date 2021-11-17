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
        return view('grades/lists-gradeinfo');
    }

    
}

