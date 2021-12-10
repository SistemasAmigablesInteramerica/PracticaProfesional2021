<?php

namespace App\Http\Controllers\Permissions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListPermissionsController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_permissions'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('permissions/list-permissionsinfo');
    }
}
