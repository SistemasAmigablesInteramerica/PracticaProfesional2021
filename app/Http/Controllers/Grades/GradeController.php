<?php

namespace App\Http\Controllers\Grades;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    //
    // Public function __construct()
    // {
    //     $this->middleware('auth');
    // }
        public function create()
        {
            return view('Grades/createGrade');
        }
}
  