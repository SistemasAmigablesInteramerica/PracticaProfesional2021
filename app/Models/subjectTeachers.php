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

public function subject_grades()
{
    return $this->hasOne(subject_grades::class, 'id', 'subject_grade_id');
}
public function teachers()
{
    return $this->hasOne(teachers::class, 'id', 'teacher_id');
}