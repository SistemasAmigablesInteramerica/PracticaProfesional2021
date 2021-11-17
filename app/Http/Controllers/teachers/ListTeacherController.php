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
        return view ('teachers/list-teacherinfo');
    }   
}
