<?php

namespace App\Http\Controllers\PermissionsRoles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListPermissionsRolesController extends Controller
{
    //
    public function __construct()
    {

    }
 
    public function create()
    {
        return view('permissionsroles/list-permissionsrolesinfo');
    }

}
