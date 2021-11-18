<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListAttendanceHistoryController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('attendance/list-attendancehistoryinfo');
    }
}
