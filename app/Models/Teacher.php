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
    public function subjectTeacher()
    {
        return $this->hasMany(SubjectTeacher::class, 'teacher_id', 'id');
    }
}

    