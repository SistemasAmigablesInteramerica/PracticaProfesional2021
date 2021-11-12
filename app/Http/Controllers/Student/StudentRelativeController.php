<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\StudentRelative;

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
        $studentRelative = StudentRelative::create($request->all());
        return $studentRelative;
        dd($request->all());
        $studentRelative->save();
    }
}
