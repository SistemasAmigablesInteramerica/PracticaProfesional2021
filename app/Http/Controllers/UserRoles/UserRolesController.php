<?php

namespace App\Http\Controllers\UserRoles;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRole;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UserRolesController extends Controller
{
    //
    public function __construct()
      {

      }

      public function create()
      {
        // abort_if(Gate::denies('create_userroles'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('userroles/insert-userrolesinfo');
      }
      public function store(Request $request)
      {
          $userroles = new UserRole();
          $userroles->fill($request->all());
          if($userroles->save()){
              return response()->json(['message'=>'Se guardo con exito','data'=> $userroles], 200);
          }
          return response()->json(['message'=>'No se guardo la informacion', 'data'=> $userroles], 471);
      }

         public function update(Request $request, $id)
      {
          $userroles = UserRole::where('id',$id)->update($request->all());
          return $userroles;
      }
      public function lists()
      {
          return UserRole::all();
      }
}
