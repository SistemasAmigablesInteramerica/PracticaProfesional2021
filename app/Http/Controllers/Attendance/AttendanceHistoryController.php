<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttendanceHistory;

class AttendanceHistoryController extends Controller
{
     //
     Public function __construct()
     {
         
     }
      public function create()
     {
        abort_if(Gate::denies('create_attendance'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('attendance/insert-attendancehistory');
     }
     public function store(Request $request)
     {
        $attendance = new AttendanceHistory();
        $attendance->fill($request->all());
        $attendance->save();
        return $attendance;
     }

     public function edit($id)
     {
         $attendance = AttendanceHistory::find($id);
         return view ('attendance/edit-attendancehistory', compact('attendance'));
         
     }

    public function list()
    {
        return AttendanceHistory::all();
    }
}
