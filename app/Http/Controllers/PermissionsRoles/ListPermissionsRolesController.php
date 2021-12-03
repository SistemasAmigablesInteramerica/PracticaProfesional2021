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
        abort_if(Gate::denies('view-permissionroles') Response::'403', 'No tiene permiso para acceder a esta pagina');
        return view('permissionsroles/list-permissionsrolesinfo');
    }

}
