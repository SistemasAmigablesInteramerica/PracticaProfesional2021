<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceHistories extends Model
{
    protected $table = 'attendance_histories';
    protected $fillable = ['date', 'check_in', 'check_out', 'student_id', 'grade_subject_teacher_id', 'teacher_id', 'attended'];
    use HasFactory;
}   

public function Student()
{
    return $this->belongsTo(Students::class, 'student_id', 'id');
}

public function Teacher()
{
    return $this->belongsTo(Teachers::class, 'teacher_id', 'id');
}

public function SubjectTeacher()
{
    return $this->belongsTo(SubjectTeachers::class, 'grade_subject_teacher_id', 'id');
}   