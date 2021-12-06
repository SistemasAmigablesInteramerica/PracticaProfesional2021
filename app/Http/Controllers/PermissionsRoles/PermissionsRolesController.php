<?php

namespace App\Http\Controllers\PermissionsRoles;

use App\Http\Controllers\Controller;
use App\Models\Role;
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
          abort_if(Gate::denies('create_permissionroles'), '403', 'No tiene permiso para acceder a esta pagina'); 
        return view('permissionsroles/insert-permissionsrolesinfo');
    }

    public function store(Request $request)
    {
        $permissions=$request->get('permissions');

        foreach ($permissions as $r) {
            PermissionRole::create([
                'role_id'      =>$request['role_id'],
                'permission_id'=>$r,
            ]);
        }

    }

    public function edit($id)
    {
        abort_if(Gate::denies('edit_permissionroles'),'403','No tiene permiso para acceder a esta pagina');

        $role=Role::with('permissions')->find($id);

        return view('permissionsroles/edit-permissionsroles',compact('role'));
    }

    public function update(Request $request,$id)
    {
        $data=$request->all();
        $role=Role::find($data['role_id']);
        $role->permissions()->sync($data['permissions']);
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
