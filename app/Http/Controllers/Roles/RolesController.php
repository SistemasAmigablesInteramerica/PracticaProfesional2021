<?php

namespace App\Http\Controllers\Roles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class RolesController extends Controller
{
      //
      public function __construct()
      {

      }

      public function create()
      {
        // abort_if(Gate::denies('create_roles'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('roles/insert-rolesinfo');
      }

      public function store(Request $request)
      {

          $roles = new Role();
          $roles->fill($request->all());
          if($roles->save()){
              return response()->json(['message'=>'Se guardo con exito','data'=> $roles], 200);
          }
          return response()->json(['message'=>'No se guardo la informacion', 'data'=> $roles], 471);
      }
      public function edit($id)
      {
          $roles = Role::find($id);

          return view('roles/edit-roles',compact('roles'));
      }

      public function update(Request $request, $id)
      {
          $roles = Role::where('id',$id)->update($request->all());
          return $roles;
      }
      public function lists()
      {
          return Role::with('permissions')->get();
      }
      public function selectRole($id)
      {
          return Role::with('permissions')->find($id);
      }

}
