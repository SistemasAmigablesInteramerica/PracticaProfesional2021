<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    //
    public function __construct()
    {

    }

     public function create()
     {
     abort_if(Gate::denies('create_roles'), '403', 'No tiene permiso para acceder a esta pagina');
       return view('roles/insert-rolesinfo');
     }

    public function edit($id) 
    {
        $user = User::find($id);

        return view('roles/edit-roles',compact('roles'));
    }   

    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->update($request->all());
        return $roles;
    }
    public function list()
    {
        return User::all();
    }
}    
