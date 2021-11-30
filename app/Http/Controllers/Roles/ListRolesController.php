<?php

namespace App\Http\Controllers\Roles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListRolesController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('roles/list-rolesinfo');
    }
}
