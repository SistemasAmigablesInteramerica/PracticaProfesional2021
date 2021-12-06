<?php

namespace App\Http\Controllers\PermissionsRoles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListPermissionsRolesController extends Controller
{
    //
    public function __construct()
    {

    }
 
    public function create()
    {
        // abort_if(Gate::denies('view_permissionroles'), Response::HTTP_FORBIDDEN, 'No tiene permiso para acceder a esta pagina');
        return view('permissionsroles/list-permissionsrolesinfo');
    }

}
