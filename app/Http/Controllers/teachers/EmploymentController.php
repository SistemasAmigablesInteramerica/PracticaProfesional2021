<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employment;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

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

    public function edit($id)
    {
        $employment = Employment::find($id);
        return view('teachers/edit-employment', compact('employment'));
    }

    public function update(Request $request, $id)
    {
        $employment = Employment::where('id', $id)->update($request->all());
        return $employment;
    }

    public function list()
    {
        return Employment::all();
    }
}
