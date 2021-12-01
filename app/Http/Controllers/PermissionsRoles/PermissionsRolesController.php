<?php

namespace App\Http\Controllers\PermissionsRoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermissionRoles;

class PermissionsRolesController extends Controller
{
    // 
    public function __construct()
    {

    }

    public function create()
    {
        return view('permissionsroles/insert-permissionsrolesinfo');
    }

    public function store(Request $request)
    {

        $permissionsroles = new PermissionsRoles();
        $permissionsroles->fill($request->all());
        if($permissionsroles->save()){
            return response()->json(['message'=>'Se guardo con exito','data'=> $permissionsroles], 200);
        }
        return response()->json(['message'=>'No se guardo la informacion', 'data'=> $permissionsroles], 471);
    }
    public function edit($id) 
    {
        $permissionsroles = PermissionsRoles::find($id);

        return view('permissionsroles/edit-permissionsroles',compact('permissionsroles'));
    }   

    public function update(Request $request, $id)
    {
        $permissionsroles = PermissionsRoles::where('id',$id)->update($request->all());
        return $permissionsroles;
    }
    public function list()
    {
        return PermissionsRoles::all(); 
    }
}
