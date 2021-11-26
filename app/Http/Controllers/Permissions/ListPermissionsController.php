<?php

namespace App\Http\Controllers\Permissions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListPermissionsController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('permissions/list-permissionsinfo');
    }
}
