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
        abort_if(Gate::denies('view-permissions'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('permissions/list-permissionsinfo');
    }
}
