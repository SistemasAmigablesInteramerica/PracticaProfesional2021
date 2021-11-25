<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceHistory extends Model
{
    protected $table = 'attendance_histories';
    protected $fillable = ['date', 'check_in', 'check_out', 'student_id', 'teacher_id', 'attended'];
    use HasFactory;

    public function student()
{
    return $this->belongsTo(Student::class, 'student_id', 'id');
}

public function teacher()
{
    return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
}

}   

