<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListUserController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('users/list-userinfo');
    }
}