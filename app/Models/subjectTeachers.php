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

public function subjectGrade()
{
    return $this->belongsTo(subject_grade::class, 'subject_grade_id', 'id');
}
public function teacher()
{
    return $this->belongsTo(teachers::class, 'teacher_id', 'id');
} 