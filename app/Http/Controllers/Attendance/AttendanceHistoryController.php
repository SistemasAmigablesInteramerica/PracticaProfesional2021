<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttendanceHistory;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

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

    public function auth()
    {
    return Auth::user();
    }

    public function check($id)
    {
    return AttendanceHistory::where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $attendance = AttendanceHistory::where('id', $id)->update($request->all());
        return $attendance;
    }

    public function list()
    {
        return AttendanceHistory::with('student','teacher')->get();
    }
}
