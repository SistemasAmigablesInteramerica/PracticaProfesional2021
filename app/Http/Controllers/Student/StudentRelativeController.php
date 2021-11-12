<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentRelativeController extends Controller
{
    //
    public function __construct
    {

    }

    public function create()
    {
        return view('/insert-studentrelativesinfo');
    }
}
