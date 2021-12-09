<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $table = 'teachers';
    protected $fillable = ['names', 'last_names', 'identification', 'birthdate', 'age', 'speciality', 'email', 'gender', 'contact_number'];

    use HasFactory;

    public function attendanceHistory()
    {
        return $this->hasMany(AttendanceHistory::class, 'teacher_id', 'id');
    }
    public function subjectGrades()
    {
        return $this->belongsToMany(SubjectGrade::class, 'subject_teachers','teacher_id', 'subject_grade_id');
    }
}

