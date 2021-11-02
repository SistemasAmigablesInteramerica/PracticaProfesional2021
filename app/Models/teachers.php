<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    
    protected $table = 'teachers';
    protected $fillable = ['names', 'last_names', 'identification', 'birthdate', 'age', 'specialty', 'email', 'gender', 'contact_number'];

    use HasFactory;
}

    public function AttendanceHistories()
    {
        return $this->hasMany(AttendanceHistories::class, 'teacher_id', 'id');
    }
    public function subjectTeachers()
    {
        return $this->hasMany(SubjectTeachers::class, 'teacher_id', 'id');
    }