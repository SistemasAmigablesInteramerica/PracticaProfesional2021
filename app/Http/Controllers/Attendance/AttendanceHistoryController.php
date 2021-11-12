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
         $attendancehistory = AttendanceHistory::create($request->all());
         return $attendancehistory;
         dd($request->all());
         $attendancehistory->save();
 
     }
}
