<?php

namespace App\Http\Controllers\UserRoles;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRoles;

class UserRolesController extends Controller
{
    // 
    public function __construct()
      {
  
      }
  
      public function create()
      {
        return view('userroles/insert-userrolesinfo');
      }
      public function store(Request $request)
      {
          $userroles = new UserRoles();
          $userroles->fill($request->all());
          if($userroles->save()){
              return response()->json(['message'=>'Se guardo con exito','data'=> $userroles], 200);
          }
          return response()->json(['message'=>'No se guardo la informacion', 'data'=> $userroles], 471);
      }
      public function edit($id) 
      {
          $userroles = UserRoles::find($id);
  
          return view('userroles/edit-userroles',compact('userroles'));
      }   
  
         public function update(Request $request, $id)
      {
          $userroles = UserRoles::where('id',$id)->update($request->all());
          return $userroles;
      }
      public function list()
      {
          return UserRoles::all();
      }
}
