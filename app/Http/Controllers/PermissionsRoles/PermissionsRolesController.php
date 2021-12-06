<?php

namespace App\Http\Controllers\PermissionsRoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermissionRole;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionsRolesController extends Controller
{
    // 
    public function __construct()
    {

    }

    public function create()
    {
        // abort_if(Gate::denies('create_permissionroles'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('permissionsroles/insert-permissionsrolesinfo');
    }

    public function store(Request $request)
    {
        $permissions_id = json_decode(json_encode($request ->permission_id), true);   

        foreach($permissions_id as $r)
        {
            PermissionRole::create([
                'role_id' => $request['role_id'],
                'permission_id' => $r,
            ]);
        }

    }
    
    public function edit($id) 
    {
        $permissionsroles = PermissionRole::find($id);

        return view('permissionsroles/edit-permissionsroles',compact('permissionsroles'));
    }   

    public function update(Request $request, $id)
    {
        // $permissionsroles = PermissionRole::where('id',$id)->update($request->all());
        // return $permissionsroles;
        $permissions_id = json_decode(json_encode($request ->permission_id), true);

        foreach($permissions_id as $r)
        {
            PermissionRole::where([
                'role_id' => $request['role_id'],
                'permission_id' => $r,
            ]);
        }
    }
    public function lists()
    {
        return Permission::LabelSelect();
    }
    public function list()
    {
        return PermissionRole::all(); 
    }
}
