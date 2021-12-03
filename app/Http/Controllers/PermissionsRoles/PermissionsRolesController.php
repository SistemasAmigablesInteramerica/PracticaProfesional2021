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
        $permissions_id = json_decode(json_encode($request ->permission_id), true);   

        foreach($permissions_id as $r)
        {
            PermissionRoles::create([
                'role_id' => $request['role_id'],
                'permission_id' => $r,
            ]);
        }

    }
    
    public function edit($id) 
    {
        $permissionsroles = PermissionRoles::find($id);

        return view('permissionsroles/edit-permissionsroles',compact('permissionsroles'));
    }   

    public function update(Request $request, $id)
    {
        $permissionsroles = PermissionRoles::where('id',$id)->update($request->all());
        return $permissionsroles;
    }
    public function list()
    {
        return PermissionRoles::all(); 
    }
}
