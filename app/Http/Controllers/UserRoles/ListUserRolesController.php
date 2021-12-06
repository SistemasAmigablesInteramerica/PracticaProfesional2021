<?php

namespace App\Http\Controllers\UserRoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListUserRolesController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_userroles'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('userroles/list-userrolesinfo');
    }
}
