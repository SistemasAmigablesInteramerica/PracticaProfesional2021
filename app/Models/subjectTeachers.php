<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectTeachers extends Model
{
    protected $table = 'subject_teachers';
    protected $fillable = ['subject_grade_id', 'teacher_id', 'year'];
    use HasFactory;
}

public function subject_grade()
{
    return $this->hasMany(subject_grades::class, 'subject_grade_id', 'id');
}
public function teacher()
{
    return $this->hasMany(teachers::class, 'teacher_id', 'id');
}