<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employment;

class EmploymentController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('teachers/insert-employmentinfo');
    }

    public function store(Request $request)
    {
        $employment = new Employment();
        $employment->fill($request->all());
        $employment->save();
        return $employment;
    }

    public function list()
    {
        return Employment::all();
    }
}
