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

<<<<<<< HEAD
        foreach($permissions_id as $r)
        {
            PermissionRole::create([
                'role_id' => $request['role_id'],
                'permission_id' => $r,
=======
        foreach ($permissions as $r) {
            PermissionRoles::create([
                'role_id'      =>$request['role_id'],
                'permission_id'=>$r,
>>>>>>> refs/remotes/origin/main
            ]);
        }

    }

    public function edit($id)
    {
<<<<<<< HEAD
        $permissionsroles = PermissionRole::find($id);
=======
        abort_if(Gate::denies('edit_permissionroles'),'403','No tiene permiso para acceder a esta pagina');
>>>>>>> refs/remotes/origin/main

        $role=Role::with('permissions')->find($id);

<<<<<<< HEAD
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
=======
        return view('permissionsroles/edit-permissionsroles',compact('role'));
    }

    public function update(Request $request,$id)
    {
        $data=$request->all();
        $role=Role::find($data['role_id']);
        $role->permissions()->sync($data['permissions']);
>>>>>>> refs/remotes/origin/main
    }

    public function lists()
    {
        return Permission::LabelSelect();
    }

    public function list()
    {
<<<<<<< HEAD
        return PermissionRole::all(); 
=======
        return PermissionRoles::all();
>>>>>>> refs/remotes/origin/main
    }
}
