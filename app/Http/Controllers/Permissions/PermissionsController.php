<?php

namespace App\Http\Controllers\Permissions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permission;


class PermissionsController extends Controller
{
    //
    public function __construct()
      {
  
      }
  
      public function create()
      {
        // abort_if(Gate::denies('create_permissions'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('permissions/insert-permissionsinfo');
      }
      public function store(Request $request)
      {
          $permissions = new Permission();
          $permissions->fill($request->all());
          if($permissions->save()){
              return response()->json(['message'=>'Se guardo con exito','data'=> $permissions], 200);
          }
          return response()->json(['message'=>'No se guardo la informacion', 'data'=> $permissions], 471);
      }
      public function edit($id) 
      {
          $permissions = Permission::find($id);
  
          return view('Permissions/edit-permissions',compact('permissions'));
      }   
  
         public function update(Request $request, $id)
      {
          $permissions = Permission::where('id',$id)->update($request->all());
          return $permissions;
      }
      public function lists()
      {
          return Permission::LabelSelect();
      }
      public function lista()
      {
          return Permission::all();
      }
}
//LabelSelect no me permite poner descripcion