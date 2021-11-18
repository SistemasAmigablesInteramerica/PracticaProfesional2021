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
        return view('subjects/lists-subjects');
    }

}
