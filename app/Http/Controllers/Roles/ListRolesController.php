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
        abort_if(Gate::denies('view_roles'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('roles/list-rolesinfo');
    }
}
