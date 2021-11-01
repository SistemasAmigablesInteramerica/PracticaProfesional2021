<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendanceHistories extends Model
{
    protected $table = 'attendance_histories';
    protected $fillable = ['date', 'check_in', 'check_out', 'student_id', 'grade_subject_teacher_id', 'teacher_id', 'attended']
    use HasFactory;
}

public function students()
{
    return $this->hasOne(students::class, 'id', 'student_id');
}

public function teachers()
{
    return $this->hasOne(teachers::class, 'id', 'teacher_id');
}

public function subject_teachers()
{
    return $this->hasOne(subject_teachers::class, 'id', 'grade_subject_teacher_id');
}