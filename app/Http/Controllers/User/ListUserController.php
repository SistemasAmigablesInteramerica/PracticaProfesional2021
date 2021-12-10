<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ListUserController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('view_user'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('users/list-userinfo');
    }
}
