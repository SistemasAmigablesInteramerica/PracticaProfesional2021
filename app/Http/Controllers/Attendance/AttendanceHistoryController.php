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
         return view('attendance/insert-attendancehistory');
     }
     public function store(Request $request)
     {
        $attendance = new AttendanceHistory();
        $attendance->fill($request->all());
        $attendance->save();
        return $attendace;
     }

    public function list()
    {
        return AttendanceHistory::all();
    }
}