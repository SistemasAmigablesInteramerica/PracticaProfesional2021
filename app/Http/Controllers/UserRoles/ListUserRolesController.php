<?php

namespace App\Http\Controllers\UserRoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListUserRolesController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view-grade'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('userroles/list-userrolesinfo');
    }
}
