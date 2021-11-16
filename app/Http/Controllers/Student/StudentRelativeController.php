<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRelative;
use App\Models\Student;

class StudentRelativeController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('students/insert-studentrelativesinfo');
    }

    public function store(Request $request)
    {
        $studentRelative = new StudentRelative();
        $studentRelative->fill($request->all());
        $studentRelative->save();
        return $studentRelative;
    }

    public function list()
    {
        return StudentRelative::all();
    }
}
