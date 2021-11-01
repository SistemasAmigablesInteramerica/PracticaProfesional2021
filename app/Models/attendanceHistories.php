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

public function student()
{
    return $this->hasMany(students::class, 'student_id', 'id');
}

public function teacher()
{
    return $this->hasMany(teachers::class, 'teacher_id', 'id');
}

public function subject_teacher()
{
    return $this->hasMany(subject_teachers::class, 'grade_subject_teacher_id', 'id');
}