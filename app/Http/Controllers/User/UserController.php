<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //
    public function __construct()
    {

    }

    // public function create()
    // {
    //   // abort_if(Gate::denies('create-roles') Response::'403', 'No tiene permiso para acceder a esta pagina');
    //   return view('roles/insert-rolesinfo');
    // }

    public function store(Request $request)
    {

        $user = new Users();
        $user->fill($request->all());
        if($user->save()){
            return response()->json(['message'=>'Se guardo con exito','data'=> $user], 200);
        }
        return response()->json(['message'=>'No se guardo la informacion', 'data'=> $user], 471);
    }
    public function edit($id) 
    {
        $user = Users::find($id);

        return view('roles/edit-roles',compact('roles'));
    }   

    public function update(Request $request, $id)
    {
        $user = Users::where('id',$id)->update($request->all());
        return $roles;
    }
    public function list()
    {
        return Users::all();
    }
}    
